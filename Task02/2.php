<?php
	class Vector{
		public $x;
		public $y;
		public $z;
		
		public function add($v){
			$this->x+=$v->x;
			$this->y+=$v->y;
			$this->z+=$v->z;
			return $this;
		}
		public function sub($v){
			$this->x-=$v->x;
			$this->y-=$v->y;
			$this->z-=$v->z;
			return $this;
		}		
		public function product($n){
			$this->x*=$n;
			$this->y*=$n;
			$this->z*=$n;
			return $this;
		}
		public function vectorProduct($v){
			$this->x-=$v->x;
			$this->y-=$v->y;
			$this->z-=$v->z;
			$vectorProduct= $this->x*$v->x+
							$this->y*$v->y+
							$this->z*$v->z;
			return $vectorProduct;
		}	
		public function __toString(){
			$this->x*=$n;
			$this->y*=$n;
			$this->z*=$n;
			return "("+$this->x+", "+$this->y+", "+$this->z+")";
		}
	}
?>