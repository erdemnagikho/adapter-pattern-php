<?php

class Custom2SerializerAdapter implements IJsonSerializer
{
    /**
     * @return string
     */
    public function serializeObject(): string
    {
        $custom2Serializer = new Custom2Serializer();

        return $custom2Serializer->serializeWithCustom2();
    }
}