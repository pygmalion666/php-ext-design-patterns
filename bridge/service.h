#ifndef SERVICE_H
#define SERVICE_H
zend_class_entry *service_ce;
PHP_METHOD(service, __construct);
PHP_METHOD(service, setImplementation);
PHP_DESIGN_STARTUP_FUNCTION(service);
#endif
