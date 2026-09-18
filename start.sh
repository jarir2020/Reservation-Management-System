#!/bin/bash
# Start script for Reservation & Restaurant Management System

PORT=8000
HOST="127.0.0.1"

echo "Starting Restaurant & Reservation Management System..."

# Check if MySQL is running
if ! pgrep -x "mysqld" > /dev/null; then
    echo "Warning: MySQL service doesn't seem to be running. Make sure MySQL server is started."
fi

# Check if port is already in use
if lsof -Pi :$PORT -sTCP:LISTEN -t >/dev/null ; then
    echo "Port $PORT is already in use. Killing existing process..."
    kill -9 $(lsof -t -i:$PORT) 2>/dev/null
fi

echo "Serving application on http://$HOST:$PORT..."
exec php -S $HOST:$PORT -t .

