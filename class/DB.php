<?php
interface DB {
    public function connect();
    public function query($sql);
}