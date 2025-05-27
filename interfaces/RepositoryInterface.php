<?php
namespace interfaces;
// interfaces/RepositoryInterface.php
interface RepositoryInterface {
    public function findAll();
    public function findById($id);
    public function save($entity);
}
