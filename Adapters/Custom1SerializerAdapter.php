<?php

class Custom1SerializerAdapter implements IJsonSerializer
{
    /**
     * @return string
     */
    public function serializeObject(): string
    {
        $custom1Serializer = new Custom1Serializer();

        return $custom1Serializer->serializeWithCustom1();
    }
}