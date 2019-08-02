<?php
require_once "mysite/dump.php";

interface  AbleToEat {
	public function eat(string $food);
}

interface AbleToSleep {
	public function sleep();
}

interface  AbleToRun {
	public function run(float $speed);
}

interface AbleToPlay {
	public function play(string $toy);
}

interface AbleToPoop {
	public function poop();
}
interface AbleToSay {
	public function say(string $content);
}

abstract class Animals implements AbleToEat, AbleToSleep, AbleToRun, AbleToPlay, AbleToPoop, AbleToSay
{
	private $name = null;
	private $color;
	private $breed;
	protected $speed = 14.0;

	public function __construct(string $breed, string $color) {
		$this->breed = $breed;
		$this->color = $color;
	}

	public function __get(string $prop) {
		if(isset($this->property)) {
			return $this->$property;
		}
		throw new Exception ('Property not found');
	}

	public function setName(string $name): void
	{
		$this->name = $name;
	}

	public function say(string $content): void 
	{
		echo $content;
	}

	public function eat(string $food): void
	{

	}

	public function poop() {

	}

	public function run(float $speed): void 
	{

	}

	public function sleep(): void
	{

	}

	public function play(string $toy) {

	}

	abstract public function getSpeed(): string;
}

class Cat extends Animals{
	public function pur() {
		echo "Purrrrrr!";
	}
	public function getSpeed(): string
	{
		return $this->speed . 'm/s'; 
	}
}

class Dog extends Animals{
	public function woof() {
		echo "Woof! Woof!";
	}
	public function getSpeed(): string
	{
		return $this->speed . 'km/h'; 
	}
}

class Human implements AbleToEat, AbleToSleep, AbleToRun, AbleToPlay, AbleToPoop, AbleToSay {
	public function eat(string $mivina) {
	}

	public function sleep() {
	}

	public function run(float $speed) {
	}

	public function play(string $toy) {
	}

	public function poop() {
	}

	public function say(string $content) {
		echo $content;
	}
}

$cat = new Cat('black', 'British');
$cat->say('Meow');
echo '<br>';
echo $cat->getSpeed();
