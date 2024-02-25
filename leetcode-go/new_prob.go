package main

import (
	"fmt"
	"os"
	"path/filepath"
	"strings"
)

func main() {

	problem_title_parts := os.Args[1:]
	problem_title := strings.Join(problem_title_parts, "")

	if err := os.Mkdir(problem_title, os.ModePerm); err != nil {
		fmt.Println(err)
	}

	cwd, _ := os.Getwd()
	path := filepath.Join(cwd, problem_title, problem_title+".go")
	newFilePath := filepath.FromSlash(path)
	file, err := os.Create(newFilePath)
	if err != nil {
		fmt.Println(err)
	}
	defer file.Close()
	fmt.Printf("File created successfully at %s\n", newFilePath)

}
