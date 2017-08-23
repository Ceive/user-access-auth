<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 30.01.2016
 * Time: 0:30
 */
namespace Ceive\User\AccessAuth {

	/**
	 * Interface IPair
	 * @package Ceive\User
	 */
	interface IPair{

		/**
		 * @param $login
		 * @return $this
		 */
		public function setLogin($login);

		/**
		 * @return string
		 */
		public function getLogin();

		/**
		 * @return string
		 */
		public function getBase64Login();

		/**
		 * @param $password
		 * @return $this
		 */
		public function setPassword($password);

		/**
		 * @return string
		 */
		public function getPassword();

		/**
		 * @return string
		 */
		public function getBase64Password();

		/**
		 * @param array $options
		 * @return bool|string
		 */
		public function hash(array $options = []);

		/**
		 * @param $passwordHash
		 * @return bool
		 */
		public function match($passwordHash);

	}
}

