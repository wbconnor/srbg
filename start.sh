#!/bin/bash
vagrant status | grep running || vagrant up
cd ./clients/web
npm run dev
