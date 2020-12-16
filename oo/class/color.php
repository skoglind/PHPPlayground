<?php

    /**
     * Class Color
     * @author Fredrik Skoglind, 2020
     */
    class Color {
        const VALIDCOLORS = array(
            'white' => '#FFF',
            'green' => '#0F0',
            'blue' => '#00F',
            'red' => '#F00'
        );
        const STANDARDCOLOR = 'white';
        private $color;
        
        /**
         * @param string $color If color is'nt valid, set to STANDARDCOLOR
         */
        public function __construct( string $color = self::STANDARDCOLOR ) {
            $this->color = $this->validColor($color) ? $color : self::STANDARDCOLOR;
        }

        /**
         * @param string $color
         * @return bool If valid color
         */
        private function validColor( string $color ) : bool {
            $valToTest = trim(strtolower( $color ));
            return array_key_exists( $valToTest, self::VALIDCOLORS ) ? true : false;
        }

        /**
         * @param string $color
         * @return bool If color name could be set
         */
        public function setColor( string $color ) : bool {
            if( $this->validColor($color) ) {
                $this->color = $color;
                return true;
            } else { return false; }
        }

        /**
        * @return string Color name
        */
        public function getColor() : string {
            return $this->color;
        }

        /**
        * @return string Color name in HEX-format [ #xxx ]
        */
        public function getHEX() : string {
            return self::VALIDCOLORS[ $this->color ];
        }
    }

?>