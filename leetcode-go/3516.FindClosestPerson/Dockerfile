# Use the official Go image as the base image
FROM golang:1.21-alpine

# Set the working directory inside the container
WORKDIR /app

# Copy go.mod and source code
COPY go.mod .
COPY main.go .

# Build the Go program
RUN go build -o main .

# Command to run the program
CMD ["./main"] 