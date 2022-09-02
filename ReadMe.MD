Генерация классов из proto файла:

protoc  --proto_path= ./ \
        --php_out= ./ \
        --grpc_out=generate_server: ./ \ 
        --plugin=protoc-gen-grpc= ./Grpc_plugin/grpc_php_plugin \
        ./GreetingService.proto


env MY_SECRET_KEY = right_secret_key_access1