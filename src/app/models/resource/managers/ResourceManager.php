<?php


interface ResourceManager {

	public function exists($path);

	public function isDirectory($path);

	public function isBaseFolder($path);

	/**
	 * @param $Resource Resource
	 */
	public function delete($Resource);

	public function findInPath($path);

	public function findAll();

	public function addFile($filename, $srcFile, $folder);

	public function isPlateformeFolder($path);
}