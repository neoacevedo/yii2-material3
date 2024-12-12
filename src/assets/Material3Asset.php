<?php

/**
 * @copyright Copyright (c) 2024 neoacevedo
 * @subpackage yii2-material3
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace neoacevedo\yii2\material3\assets;

use yii\web\AssetBundle;

/**
 * Material 3 Asset.
 */
class Material3Asset extends AssetBundle
{
    public $sourcePath = '@vendor/neoacevedo/yii2-material3/src/assets/dist';

    public $css = [
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined',
    ];

    public $js = [
        'js/bundle.js',
        'js/yii2-material3.min.js',
    ];

    public $depends = [
        Material2MdcCardAsset::class
    ];

    public $publishOptions = [
        'forceCopy' => YII_DEBUG,
    ];

}