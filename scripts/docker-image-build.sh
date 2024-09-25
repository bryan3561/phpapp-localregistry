#!/bin/bash

# Cargar variables de entorno
if [ -f .env ]; then
    export $(cat .env | xargs)
fi

# Verificar si se proporcionó un número de versión
if [ -z "$1" ]; then
    echo "Por favor, proporcione un número de versión."
    exit 1
fi

VERSION=$1
REGISTRY_URL="localhost:5000"

# Construir las imágenes
docker-compose build

# Etiquetar las imágenes
docker tag app_php_ejemplo_php:latest $REGISTRY_URL/app_php_ejemplo_php:$VERSION

# Publicar las imágenes en el registro local
docker push $REGISTRY_URL/app_php_ejemplo_php:$VERSION

echo "Imágenes construidas y publicadas con la versión $VERSION"