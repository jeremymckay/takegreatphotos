curl --header "Content-Type: application/json" \
    --header "Prefer:status=409" \
    --request POST \
    --data '{
            "question": "Favourite programming language?",
            "choices": [
                "Swift",
                "Python",
                "Objective-C",
                "Ruby"
            ]
        }' \
    http://localhost:3000/questions