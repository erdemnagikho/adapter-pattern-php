<?php

interface IJsonSerializer
{
    /**
     * @return string
     */
    public function serializeObject(): string;
}