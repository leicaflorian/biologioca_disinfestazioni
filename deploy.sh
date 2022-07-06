#!/bin/bash

npm run prod
git add .
git commit -m "Deploy"
git push origin main
