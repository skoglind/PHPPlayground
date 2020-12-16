<?php

    /**
     * Class Flower
     * @author Fredrik Skoglind, 2020
     */
    class Flower {
        private $name;
        private $color;

        /**
         * @param string $name Name of flower
         */
        public function __construct( string $name ) {
            $this->name = $name;
            $this->color = new Color();
        }
    
        /**
         * @param string $colorName Colorname [ white, green, blue, red ]
         */
        public function setColor( string $colorName ) : bool {
            return $this->color->setColor( $colorName );
        }

        /** 
         * @return string Color name
         */
        public function getColor() : string {
            return $this->color->getColor();
        }

        /** 
        * @return string Color name in HEX-format [ #xxx ]
        */
        public function getHEXColor() : string {
            return $this->color->getHEX();
        }

        /**
         * Return flower name, if null return "Name is missing"
         * @return string 
         */
        public function getName() : string {
            return isset($this->name) ? $this->name : 'Name is missing';
        }
    }

?>