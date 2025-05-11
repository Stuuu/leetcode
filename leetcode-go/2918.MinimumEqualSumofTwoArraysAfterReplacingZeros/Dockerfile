FROM golang:1.23-alpine AS builder 

WORKDIR /app

COPY . .

RUN go mod init go-docker-demo

RUN go build -o program .



FROM builder 

WORKDIR /app

COPY --from=builder /app/program .

CMD ["./program"]
