<?php

declare(strict_types=1);

namespace Rector\Doctrine\ValueObject;

final class DefaultAnnotationArgValue
{
    public function __construct(
        private string $annotationClass,
        private string $argName,
        private string|bool|int $defaultValue
    ) {
    }

    public function getAnnotationClass(): string
    {
        return $this->annotationClass;
    }

    public function getArgName(): string
    {
        return $this->argName;
    }

    public function getDefaultValue(): bool|int|string
    {
        return $this->defaultValue;
    }
}