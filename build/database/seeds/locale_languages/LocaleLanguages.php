<?php
use App\LocaleLanguage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 21-Dec-2015
 * Time: 14:55
 */
class LocaleLanguages extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('locale_language')->truncate();

        $localeLanguages = [
            [
                'short_code' => 'af',
                'long_code' => 'af',
                'name' => 'Afrikaans'
            ],
            [
                'short_code' => 'sq',
                'long_code' => 'sq',
                'name' => 'Albanian'
            ],
            [
                'short_code' => 'am',
                'long_code' => 'am',
                'name' => 'Amharic'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-dz',
                'name' => 'Arabic - Algeria'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-bh',
                'name' => 'Arabic - Bahrain'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-eg',
                'name' => 'Arabic - Egypt'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-iq',
                'name' => 'Arabic - Iraq'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-jo',
                'name' => 'Arabic - Jordan'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-kw',
                'name' => 'Arabic - Kuwait'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-lb',
                'name' => 'Arabic - Lebanon'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-ly',
                'name' => 'Arabic - Libya'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-ma',
                'name' => 'Arabic - Morocco'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-om',
                'name' => 'Arabic - Oman'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-qa',
                'name' => 'Arabic - Qatar'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-sa',
                'name' => 'Arabic - Saudi Arabia'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-sy',
                'name' => 'Arabic - Syria'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-tn',
                'name' => 'Arabic - Tunisia'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-ae',
                'name' => 'Arabic - United Arab Emirates'
            ],
            [
                'short_code' => 'ar',
                'long_code' => 'ar-ye',
                'name' => 'Arabic - Yemen'
            ],
            [
                'short_code' => 'hy',
                'long_code' => 'hy',
                'name' => 'Armenian'
            ],
            [
                'short_code' => 'as',
                'long_code' => 'as',
                'name' => 'Assamese'
            ],
            [
                'short_code' => 'az',
                'long_code' => 'az-az',
                'name' => 'Azeri - Cyrillic'
            ],
            [
                'short_code' => 'eu',
                'long_code' => 'eu',
                'name' => 'Basque'
            ],
            [
                'short_code' => 'be',
                'long_code' => 'be',
                'name' => 'Belarusian'
            ],
            [
                'short_code' => 'bn',
                'long_code' => 'bn',
                'name' => 'Bengali'
            ],
            [
                'short_code' => 'bs',
                'long_code' => 'bs',
                'name' => 'Bosnian'
            ],
            [
                'short_code' => 'bg',
                'long_code' => 'bg',
                'name' => 'Bulgarian'
            ],
            [
                'short_code' => 'my',
                'long_code' => 'my',
                'name' => 'Burmese'
            ],
            [
                'short_code' => 'ca',
                'long_code' => 'ca',
                'name' => 'Catalan'
            ],
            [
                'short_code' => 'zh',
                'long_code' => 'zh-cn',
                'name' => 'Chinese - China'
            ],
            [
                'short_code' => 'zh',
                'long_code' => 'zh-hk',
                'name' => 'Chinese - Hong Kong SAR'
            ],
            [
                'short_code' => 'zh',
                'long_code' => 'zh-mo',
                'name' => 'Chinese - Macau SAR'
            ],
            [
                'short_code' => 'zh',
                'long_code' => 'zh-sg',
                'name' => 'Chinese - Singapore'
            ],
            [
                'short_code' => 'zh',
                'long_code' => 'zh-tw',
                'name' => 'Chinese - Taiwan'
            ],
            [
                'short_code' => 'hr',
                'long_code' => 'hr',
                'name' => 'Croatian'
            ],
            [
                'short_code' => 'cs',
                'long_code' => 'cs',
                'name' => 'Czech'
            ],
            [
                'short_code' => 'da',
                'long_code' => 'da',
                'name' => 'Danish'
            ],
            [
                'short_code' => 'dv',
                'long_code' => 'dv',
                'name' => 'Divehi; Dhivehi; Maldivian'
            ],
            [
                'short_code' => 'nl',
                'long_code' => 'nl-be',
                'name' => 'Dutch - Belgium'
            ],
            [
                'short_code' => 'nl',
                'long_code' => 'nl-nl',
                'name' => 'Dutch - Netherlands'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-au',
                'name' => 'English - Australia'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-bz',
                'name' => 'English - Belize'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-ca',
                'name' => 'English - Canada'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-cb',
                'name' => 'English - Caribbean'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-gb',
                'name' => 'English - Great Britain'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-in',
                'name' => 'English - India'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-ie',
                'name' => 'English - Ireland'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-jm',
                'name' => 'English - Jamaica'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-nz',
                'name' => 'English - New Zealand'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-ph',
                'name' => 'English - Phillippines'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-za',
                'name' => 'English - South Africa'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-tt',
                'name' => 'English - Trinidad'
            ],
            [
                'short_code' => 'en',
                'long_code' => 'en-us',
                'name' => 'English - United States'
            ],
            [
                'short_code' => 'et',
                'long_code' => 'et',
                'name' => 'Estonian'
            ],
            [
                'short_code' => 'fo',
                'long_code' => 'fo',
                'name' => 'Faroese'
            ],
            [
                'short_code' => 'fa',
                'long_code' => 'fa',
                'name' => 'Farsi - Persian'
            ],
            [
                'short_code' => 'fi',
                'long_code' => 'fi',
                'name' => 'Finnish'
            ],
            [
                'short_code' => 'fr',
                'long_code' => 'fr-be',
                'name' => 'French - Belgium'
            ],
            [
                'short_code' => 'fr',
                'long_code' => 'fr-ca',
                'name' => 'French - Canada'
            ],
            [
                'short_code' => 'fr',
                'long_code' => 'fr-fr',
                'name' => 'French - France'
            ],
            [
                'short_code' => 'fr',
                'long_code' => 'fr-lu',
                'name' => 'French - Luxembourg'
            ],
            [
                'short_code' => 'fr',
                'long_code' => 'fr-ch',
                'name' => 'French - Switzerland'
            ],
            [
                'short_code' => 'mk',
                'long_code' => 'mk',
                'name' => 'FYRO Macedonia'
            ],
            [
                'short_code' => 'gd',
                'long_code' => 'gd-ie',
                'name' => 'Gaelic - Ireland'
            ],
            [
                'short_code' => 'gd',
                'long_code' => 'gd',
                'name' => 'Gaelic - Scotland'
            ],
            [
                'short_code' => 'de',
                'long_code' => 'de-at',
                'name' => 'German - Austria'
            ],
            [
                'short_code' => 'de',
                'long_code' => 'de-de',
                'name' => 'German - Germany'
            ],
            [
                'short_code' => 'de',
                'long_code' => 'de-li',
                'name' => 'German - Liechtenstein'
            ],
            [
                'short_code' => 'de',
                'long_code' => 'de-lu',
                'name' => 'German - Luxembourg'
            ],
            [
                'short_code' => 'de',
                'long_code' => 'de-ch',
                'name' => 'German - Switzerland'
            ],
            [
                'short_code' => 'el',
                'long_code' => 'el',
                'name' => 'Greek'
            ],
            [
                'short_code' => 'gn',
                'long_code' => 'gn',
                'name' => 'Guarani - Paraguay'
            ],
            [
                'short_code' => 'gu',
                'long_code' => 'gu',
                'name' => 'Gujarati'
            ],
            [
                'short_code' => 'he',
                'long_code' => 'he',
                'name' => 'Hebrew'
            ],
            [
                'short_code' => 'hi',
                'long_code' => 'hi',
                'name' => 'Hindi'
            ],
            [
                'short_code' => 'hu',
                'long_code' => 'hu',
                'name' => 'Hungarian'
            ],
            [
                'short_code' => 'is',
                'long_code' => 'is',
                'name' => 'Icelandic'
            ],
            [
                'short_code' => 'id',
                'long_code' => 'id',
                'name' => 'Indonesian'
            ],
            [
                'short_code' => 'it',
                'long_code' => 'it-it',
                'name' => 'Italian - Italy'
            ],
            [
                'short_code' => 'it',
                'long_code' => 'it-ch',
                'name' => 'Italian - Switzerland'
            ],
            [
                'short_code' => 'ja',
                'long_code' => 'ja',
                'name' => 'Japanese'
            ],
            [
                'short_code' => 'kn',
                'long_code' => 'kn',
                'name' => 'Kannada'
            ],
            [
                'short_code' => 'ks',
                'long_code' => 'ks',
                'name' => 'Kashmiri'
            ],
            [
                'short_code' => 'kk',
                'long_code' => 'kk',
                'name' => 'Kazakh'
            ],
            [
                'short_code' => 'km',
                'long_code' => 'km',
                'name' => 'Khmer'
            ],
            [
                'short_code' => 'ko',
                'long_code' => 'ko',
                'name' => 'Korean'
            ],
            [
                'short_code' => 'lo',
                'long_code' => 'lo',
                'name' => 'Lao'
            ],
            [
                'short_code' => 'la',
                'long_code' => 'la',
                'name' => 'Latin'
            ],
            [
                'short_code' => 'lv',
                'long_code' => 'lv',
                'name' => 'Latvian'
            ],
            [
                'short_code' => 'lt',
                'long_code' => 'lt',
                'name' => 'Lithuanian'
            ],
            [
                'short_code' => 'ms',
                'long_code' => 'ms-bn',
                'name' => 'Malay - Brunei'
            ],
            [
                'short_code' => 'ms',
                'long_code' => 'ms-my',
                'name' => 'Malay - Malaysia'
            ],
            [
                'short_code' => 'ml',
                'long_code' => 'ml',
                'name' => 'Malayalam'
            ],
            [
                'short_code' => 'mt',
                'long_code' => 'mt',
                'name' => 'Maltese'
            ],
            [
                'short_code' => 'mi',
                'long_code' => 'mi',
                'name' => 'Maori'
            ],
            [
                'short_code' => 'mr',
                'long_code' => 'mr',
                'name' => 'Marathi'
            ],
            [
                'short_code' => 'mn',
                'long_code' => 'mn',
                'name' => 'Mongolian'
            ],
            [
                'short_code' => 'ne',
                'long_code' => 'ne',
                'name' => 'Nepali'
            ],
            [
                'short_code' => 'nb',
                'long_code' => 'no-no',
                'name' => 'Norwegian - Nynorsk'
            ],
            [
                'short_code' => 'or',
                'long_code' => 'or',
                'name' => 'Oriya'
            ],
            [
                'short_code' => 'pl',
                'long_code' => 'pl',
                'name' => 'Polish'
            ],
            [
                'short_code' => 'pt',
                'long_code' => 'pt-br',
                'name' => 'Portuguese - Brazil'
            ],
            [
                'short_code' => 'pt',
                'long_code' => 'pt-pt',
                'name' => 'Portuguese - Portugal'
            ],
            [
                'short_code' => 'pa',
                'long_code' => 'pa',
                'name' => 'Punjabi'
            ],
            [
                'short_code' => 'rm',
                'long_code' => 'rm',
                'name' => 'Raeto-Romance'
            ],
            [
                'short_code' => 'rm',
                'long_code' => 'ro-mo',
                'name' => 'Romanian - Moldova'
            ],
            [
                'short_code' => 'rm',
                'long_code' => 'ro-ro',
                'name' => 'Romanian - Romania'
            ],
            [
                'short_code' => 'ru',
                'long_code' => 'ru',
                'name' => 'Russian'
            ],
            [
                'short_code' => 'ru',
                'long_code' => 'ru-mo',
                'name' => 'Russian - Moldova'
            ],
            [
                'short_code' => 'sa',
                'long_code' => 'sa',
                'name' => 'Sanskrit'
            ],
            [
                'short_code' => 'sr',
                'long_code' => 'sr-sp',
                'name' => 'Serbian - Latin'
            ],
            [
                'short_code' => 'tn',
                'long_code' => 'tn',
                'name' => 'Setsuana'
            ],
            [
                'short_code' => 'sd',
                'long_code' => 'sd',
                'name' => 'Sindhi'
            ],
            [
                'short_code' => 'si',
                'long_code' => 'si',
                'name' => 'Sinhala; Sinhalese'
            ],
            [
                'short_code' => 'sk',
                'long_code' => 'sk',
                'name' => 'Slovak'
            ],
            [
                'short_code' => 'sl',
                'long_code' => 'sl',
                'name' => 'Slovenian'
            ],
            [
                'short_code' => 'so',
                'long_code' => 'so',
                'name' => 'Somali'
            ],
            [
                'short_code' => 'sb',
                'long_code' => 'sb',
                'name' => 'Sorbian'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-ar',
                'name' => 'Spanish - Argentina'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-bo',
                'name' => 'Spanish - Bolivia'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-cl',
                'name' => 'Spanish - Chile'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-co',
                'name' => 'Spanish - Colombia'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-cr',
                'name' => 'Spanish - Costa Rica'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-do',
                'name' => 'Spanish - Dominican Republic'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-ec',
                'name' => 'Spanish - Ecuador'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-sv',
                'name' => 'Spanish - El Salvador'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-gt',
                'name' => 'Spanish - Guatemala'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-hn',
                'name' => 'Spanish - Honduras'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-mx',
                'name' => 'Spanish - Mexico'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-ni',
                'name' => 'Spanish - Nicaragua'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-pa',
                'name' => 'Spanish - Panama'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-py',
                'name' => 'Spanish - Paraguay'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-pe',
                'name' => 'Spanish - Peru'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-pr',
                'name' => 'Spanish - Puerto Rico'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-es',
                'name' => 'Spanish - Spain (Traditional)'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-uy',
                'name' => 'Spanish - Uruguay'
            ],
            [
                'short_code' => 'es',
                'long_code' => 'es-ve',
                'name' => 'Spanish - Venezuela'
            ],
            [
                'short_code' => 'sw',
                'long_code' => 'sw',
                'name' => 'Swahili'
            ],
            [
                'short_code' => 'sv',
                'long_code' => 'sv-fi',
                'name' => 'Swedish - Finland'
            ],
            [
                'short_code' => 'sv',
                'long_code' => 'sv-se',
                'name' => 'Swedish - Sweden'
            ],
            [
                'short_code' => 'tg',
                'long_code' => 'tg',
                'name' => 'Tajik'
            ],
            [
                'short_code' => 'ta',
                'long_code' => 'ta',
                'name' => 'Tamil'
            ],
            [
                'short_code' => 'tt',
                'long_code' => 'tt',
                'name' => 'Tatar'
            ],
            [
                'short_code' => 'te',
                'long_code' => 'te',
                'name' => 'Telugu'
            ],
            [
                'short_code' => 'th',
                'long_code' => 'th',
                'name' => 'Thai'
            ],
            [
                'short_code' => 'bo',
                'long_code' => 'bo',
                'name' => 'Tibetan'
            ],
            [
                'short_code' => 'ts',
                'long_code' => 'ts',
                'name' => 'Tsonga'
            ],
            [
                'short_code' => 'tr',
                'long_code' => 'tr',
                'name' => 'Turkish'
            ],
            [
                'short_code' => 'tk',
                'long_code' => 'tk',
                'name' => 'Turkmen'
            ],
            [
                'short_code' => 'uk',
                'long_code' => 'uk',
                'name' => 'Ukrainian'
            ],
            [
                'short_code' => 'ur',
                'long_code' => 'ur',
                'name' => 'Urdu'
            ],
            [
                'short_code' => 'uz',
                'long_code' => 'uz',
                'name' => 'Uzbek - Latin'
            ],
            [
                'short_code' => 'vi',
                'long_code' => 'vi',
                'name' => 'Vietnamese'
            ],
            [
                'short_code' => 'cy',
                'long_code' => 'cy',
                'name' => 'Welsh'
            ],
            [
                'short_code' => 'xh',
                'long_code' => 'xh',
                'name' => 'Xhosa'
            ],
            [
                'short_code' => 'yi',
                'long_code' => 'yi',
                'name' => 'Yiddish'
            ],
            [
                'short_code' => 'zu',
                'long_code' => 'zu',
                'name' => 'Zulu'
            ]
        ];

        foreach($localeLanguages as $l){
            $language = new LocaleLanguage($l);
            $language->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}