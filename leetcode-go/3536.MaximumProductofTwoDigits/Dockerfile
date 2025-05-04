FROM golang:1.23-alpine AS builder

WORKDIR /app

COPY . . 

RUN go build -o program .

FROM alpine
WORKDIR /app
COPY --from=builder /app/program .
CMD ["./program"]


