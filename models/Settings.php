<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 06.03.16
 * Time: 1:34
 */

namespace CheerfulLab\Frontendspelling\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\Validation as ValidationTrait;

class Settings extends Model
{
    use ValidationTrait;

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'cheerfullab_frontendspelling_settings';
    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public $attributeNames = [
        'nativemailer_email' => 'Developer email',
    ];

    public $rules = [
    ];
}