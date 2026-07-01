<?php

namespace SunatPle\Validator;

use SunatPle\Schema\Rule;

class SchemaValidator
{
    public static function validate(array $record, array $schema): void
    {
        foreach ($schema as $field => $rules) {

            $value = $record[$field] ?? null;

            if (($rules[Rule::REQUIRED] ?? false) === true) {
                RequiredValidator::validate($value, $field);
            }

            if ($value === null || $value === '') {
                continue;
            }

            switch ($rules[Rule::TYPE] ?? null) {

                case Rule::NUMERIC:
                    NumericValidator::validate($value, $field);
                    break;

                case Rule::DATE:
                    DateValidator::validate($value, $field);
                    break;
            }

            if (isset($rules[Rule::MAX])) {
                LengthValidator::max(
                    (string) $value,
                    $rules[Rule::MAX],
                    $field
                );
            }

            if (isset($rules[Rule::ENUM])) {
                EnumValidator::validate(
                    $value,
                    $rules[Rule::ENUM],
                    $field
                );
            }
        }
    }
}