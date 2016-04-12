<?php
class ConcreteCom extends ComDecorator{
	public function __construct(ICom $user)
	{
		$this->user = $user;
	}
	public function getAge()
	{		
		return 2+$this->user->getAge();
	}
	public function getName()
	{
		return $this->user->getName();
	}
}