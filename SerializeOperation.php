<?php

class SerializeOperation
{
    private IJsonSerializer $jsonSerializer;

    public function __construct(IJsonSerializer $jsonSerializer)
    {
        $this->jsonSerializer = $jsonSerializer;
    }

    /**
     * @return string
     */
    public function SerializeObject(): string
    {
        return $this->jsonSerializer->serializeObject();
    }
}