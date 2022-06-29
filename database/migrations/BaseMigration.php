<?php

interface BaseMigration
{
    public function up();

    public function down();
}