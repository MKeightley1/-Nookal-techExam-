<?php

	/**
		Application requirments -  where array will be of minimum length 3, max length 20
	*/
	define("MIN_LENGTH", 3);
	define("MAX_LENGTH", 20);
	
	class AlternateSort{


		private $givenArray;

		public function __construct(array $givenArray)
		{
			// remove any no integer values from array
			$givenArray = array_filter($givenArray, 'is_int');
			
			//sort array if not sorted already
			sort($givenArray);
			
			//validate input
			$this->validateArray($givenArray);

			$this->givenArray = $givenArray;
		}
		
		private function validateArray($array){
			
			//validate length of array
			if (count($array) < MIN_LENGTH) {
				throw new InvalidArgumentException(
					sprintf(
						'Array length is too short'
					)
				);
			}
			
			//validate length of array
			if (count($array) > MAX_LENGTH) {
				throw new InvalidArgumentException(
					sprintf(
						'Array length is too large'
					)
				);
			}
			
		}
		

		/**
		 * AlternateSort executor.
		 *
		 * @param array $array - The sorted array provided
		 * @return array - The alternatively sorted array
		 */
		public function run()
		{
			
			$array = $this->givenArray;
			
			//create a new array that will be the result after the sorting of elements
			$transformedArray = [];
			
			foreach($array As &$arrayValue){
			
				//grab the last element to reorder in new array
				$transformedArray[] = array_pop($array);
				
				//add front pointer element and add to new array
				$transformedArray[] = $arrayValue;
			}
			
			//remove duplicates if odds arrays elements provided
			if(count($this->givenArray)%2 != 0 ){
				array_pop($transformedArray);
			}
			
			return $transformedArray;
		}
	}
	
	$obj = new AlternateSort([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
	$result = $obj->run();
	var_dump($result);