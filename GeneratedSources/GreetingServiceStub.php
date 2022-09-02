<?php
// GENERATED CODE -- DO NOT EDIT!

namespace GeneratedSources;

/**
 */
class GreetingServiceStub {

    /**
     * @param \GeneratedSources\HelloRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \GeneratedSources\HelloResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function greeting(
        \GeneratedSources\HelloRequest $request,
        \Grpc\ServerContext $context
    ): ?\GeneratedSources\HelloResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/GeneratedSources.GreetingService/greeting' => new \Grpc\MethodDescriptor(
                $this,
                'greeting',
                '\GeneratedSources\HelloRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
