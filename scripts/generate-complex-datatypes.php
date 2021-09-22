<?php

/**
 * @file
 * Generates interface Web3Methods.
 *
 * Generating from resources/zilliqa-schema.json -> objects.
 *
 * @ingroup generators
 */

require_once(__DIR__ . "/generator-commons.php");

use gossi\codegen\generator\CodeGenerator;
use gossi\codegen\model\PhpMethod;
use gossi\codegen\model\PhpClass;
use gossi\codegen\model\PhpParameter;
use gossi\codegen\model\PhpProperty;
use Zilliqa\DataType\ZilliqaData;
use Zilliqa\DataType\ZilliqaDataType;

/**
 * @var string TARGET_PATH Generator destination.
 */
const TARGET_PATH = __DIR__ . '/../src/DataType';

/**
 * @var string TARGET_PATH Generator destination.
 */
$scriptName  = 'scripts/'. basename(__FILE__);

// For Tests we can disable the file generation.
$shouldWriteToDisc = !((isset($GLOBALS['argv'][1]) && $GLOBALS['argv'][1] === '--no-file-generation'));

echo "### GENERATING COMPLEX DATA TYPE CLASSES ###\n";
//echo "# File generated " . $conf['destination'] . "\n";
echo "#############################################\n";


$file_header = <<<EOF
<?php
/**
 * @file
 * This is a file generated by $scriptName.
 *
 * DO NOT EDIT THIS FILE.
 *
 * @ingroup generated
 * @ingroup dataTypesComplex
 */

EOF;

$schema = getSchema();

$limit = 100;
foreach ($schema['objects'] as $obj_name => $params) {

    $limit--;
    if ($limit === 0) break;

    $useStatements = [];

    $phpClass = new PhpClass();
    
    printMe("\n\n# $obj_name");

    $required = $params['__required'];
    unset($params['__required']);
    
    $params = reorderParams(['params' => $params, 'required' => $required]);

    $phpClass->setQualifiedName('\\Zilliqa\\DataType\\' . $obj_name)
        ->setParentClassName('ZilliqaDataType')
        ->setDescription(array(
            'Zilliqa data type ' . $obj_name .'.',
            '',
            "Generated by $scriptName based on resources/zilliqa-schema.json.",
        ))
        ->setProperties(makeProperties($params))
        ->setUseStatements($useStatements)
    ;

    $methods = [];
    $methods[] = PhpMethod::create('__construct')
        ->setParameters(makeConstructorParams($params))
        ->setBody(makeConstructorContent($params));

    $methods[] = PhpMethod::create('getTypeArray')
        ->setBody(makeTypeArrayBody($params))
        ->setType('array')
        ->setStatic(true);

    $methods[] = PhpMethod::create('toArray')
        ->setDescription('Returns array with values.')
        ->setType('array')
        ->setBody(makeToArrayBody($params));

    $phpClass->setMethods($methods);

    $generator = new CodeGenerator([
        'generateScalarTypeHints' => true,
        'generateReturnTypeHints' => true,
        'enableSorting' => false,
    ]);
    $phpClassText = $generator->generate($phpClass);

    $destination_path = TARGET_PATH . '/' . ucfirst($obj_name) . '.php';
    echo "generated file: $destination_path \n";
    if ($shouldWriteToDisc) {
        file_put_contents($destination_path , $file_header . $phpClassText);
    }
    else {
        echo "File is not written to disc, because file generation is disabled by '--no-file-generation'\n";
    }

}

function reorderParams(array $input): array
{
    $params = $input;
    $params['params'] = [];
    foreach ($input['params'] as $name => $type) {
        if (in_array($name, $input['required'])) {
            $params['params'][$name] = $type;
        }
    }
    foreach ($input['params'] as $name => $type) {
        if (!in_array($name, $input['required'])) {
            $params['params'][$name] = $type;
        }
    }
    return $params;
}

function makeConstructorParams(Array &$input): array
{
    $params = [];
    // Required params first.
    foreach ($input['params'] as $name => $type) {
        $description = null;
        $optionalValue = false;
        if (!is_array($type)) {
            $type = ZilliqaData::typeMap($type);
            if (!in_array($name, $input['required'])) {
                $optionalValue = true;
            }
        } else {
            if (!in_array($name, $input['required'])) {
              $optionalValue = true;
            }
            $subtype = ZilliqaData::typeMap($type[0]) ? ZilliqaData::typeMap($type[0]) : $type[0];
            $type = 'array';
            $description = 'Array of ' . $subtype;
        }

        $tmp = new PhpParameter($name);
        $tmp->setType($type);
        if ($description) {
            $tmp->setTypeDescription($description);
        }
        if ($optionalValue) {
            $tmp->setValue(null);
        }
        $params[] = $tmp;
    }
    return $params;
}

function makeProperties(array $input): array
{
    $properties = [];
    foreach ($input['params'] as $name => $type) {
        $isArray = is_array($type);
        $t = $isArray ? $type[0] : $type;
        $p = new PhpProperty($name);
        $p->setDescription("@var " . ZilliqaDataType::getTypeClass($t) . ($isArray ? "[]" : ""));
        $properties[] = $p;
    }
    return $properties;
}

function makeConstructorContent(array $input)
{
    $properties = '';
    foreach ($input['params'] as $name => $type) {
        $properties .= '$this->' . $name . " = $$name;  \n";
    }

    return substr($properties, 0, -2);
}

function makeTypeArrayBody(array $input): string
{
    $data[] = "return [";
    foreach ($input['params'] as $name => $type) {
        if (is_array($type)) {
            $data[] = "\t'" . $name . "' => '[" . ZilliqaData::typeMap($type[0]) . "]',";
        } else {
            $data[] = "\t'" . $name . "' => '" . ZilliqaData::typeMap($type) . "',";
        }
    }
    $data[] = "];";
    return implode("\n", $data);
}

function makeToArrayBody(array $input): string
{
    $return = '$return = [];' . "\n";
    foreach ($input['params'] as $name => $type) {
        if (is_array($type)) {
            $return .= sprintf('!is_null($this->%s) ?? $return[\'%s\'] = \Zilliqa\Zilliqa::valueArray($this->%s, \'%s\');', $name, $name, $name, ZilliqaDataType::getTypeClass($type[0])) . "\n";
        } else {
            $return .= sprintf('!is_null($this->%s) ?? $return[\'%s\'] = $this->%s->val();', $name, $name, $name) . "\n";
        }
    }

    $return .= 'return $return;';

    return $return;
}
