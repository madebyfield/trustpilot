<?php
/*
 * This file is part of the TrustPilot library.
 *
 * (c) Graphem Solutions <info@graphem.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TrustPilot\Api;

/**
 * @author Graphem Solutions <info@graphem.ca>
 */

use TrustPilot\TrustPilot;

class Resources extends AbstractApi{

    /**
     * Get all countries known to Trustpilot
     * https://developers.trustpilot.com/resources-api#get-all-countries-known-to-trustpilot
     *
     *
     * @param string|array
     * @return \stdClass
     */
    public function getCountries($data, $locale='')
    {
        return json_decode(
            $this->api->get('resources/metadata/countries',
                            ['query' =>
                                [
                                    'apikey' => $data['apikey'],
                                    'locale' => $locale,
                                ]
                            ]
            ));
    }

    /**
     * Get stars image
     * https://developers.trustpilot.com/resources-api#get-the-star-image-resources
     *
     *
     * @param string|array
     * @return \stdClass
     */
    public function getStarsImage($stars, $data)
    {
        return json_decode(
            $this->api->get('resources/images/stars/'. $stars,
                            ['query' =>
                                [
                                    'apikey' => $data['apikey']
                                ]
                            ]
            ));
    }

    /**
     * Get stars strings
     * https://developers.trustpilot.com/resources-api#get-the-string-representation-of-the-stars
     *
     *
     * @param string|array
     * @return \stdClass
     */
    public function getStarsString($stars, $locale='en-US', $data)
    {
        return json_decode(
            $this->api->get('resources/strings/stars/'. $stars,
                            ['query' =>
                                [
                                    'apikey' => $data['apikey'],
                                    'locale' => $locale,
                                ]
                            ]
            ));
    }

    /**
     * Get the Trustpilot icon images
     * https://developers.trustpilot.com/resources-api#get-the-trustpilot-icon-images
     *
     *
     * @param string|array
     * @return \stdClass
     */
    public function getIcons($data)
    {
        return json_decode(
            $this->api->get('resources/images/icons',
                            ['query' =>
                                [
                                    'apikey' => $data['apikey']
                                ]
                            ]
            ));
    }

    /**
     * Get the Trustpilot logo images
     * https://developers.trustpilot.com/resources-api#get-the-trustpilot-logo-images
     *
     *
     * @param string|array
     * @return \stdClass
     */
    public function getLogos($data)
    {
        return json_decode(
            $this->api->get('resources/images/logos',
                            ['query' =>
                                [
                                    'apikey' => $data['apikey']
                                ]
                            ]
            ));
    }

    /**
     * Get Trustpilot supported locales
     * https://developers.trustpilot.com/resources-api#get-trustpilot-supported-locales
     *
     *
     * @param string|array
     * @return \stdClass
     */
    public function getLocales($data, $translationLocale='')
    {
        return json_decode(
            $this->api->get('resources/metadata/locales',
                            ['query' =>
                                [
                                    'apikey' => $data['apikey'],
                                    'translationLocale' => $translationLocale,
                                ]
                            ]
            ));
    }
    
}
