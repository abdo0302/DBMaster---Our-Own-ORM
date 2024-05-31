<?php
interface ORMInterface {
    public function save();
    public function update($id);
    public function delete($id);
    public function find($id);
    public function findAll();
}
?>

