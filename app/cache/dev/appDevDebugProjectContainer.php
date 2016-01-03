<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'api.data_provider' => 'getApi_DataProviderService',
            'api.doctrine.event_subscriber' => 'getApi_Doctrine_EventSubscriberService',
            'api.hydra.documentation_builder' => 'getApi_Hydra_DocumentationBuilderService',
            'api.hydra.listener.link_header_response' => 'getApi_Hydra_Listener_LinkHeaderResponseService',
            'api.hydra.listener.request_exception' => 'getApi_Hydra_Listener_RequestExceptionService',
            'api.hydra.normalizer.constraint_violation_list' => 'getApi_Hydra_Normalizer_ConstraintViolationListService',
            'api.hydra.normalizer.error' => 'getApi_Hydra_Normalizer_ErrorService',
            'api.iri_converter' => 'getApi_IriConverterService',
            'api.json_ld.context_builder' => 'getApi_JsonLd_ContextBuilderService',
            'api.json_ld.entrypoint_builder' => 'getApi_JsonLd_EntrypointBuilderService',
            'api.json_ld.resource_context_builder_listener' => 'getApi_JsonLd_ResourceContextBuilderListenerService',
            'api.mapping.class_metadata_factory' => 'getApi_Mapping_ClassMetadataFactoryService',
            'api.operation_factory' => 'getApi_OperationFactoryService',
            'api.resource_collection' => 'getApi_ResourceCollectionService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_http_cache.event_listener.cache_control' => 'getFosHttpCache_EventListener_CacheControlService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'hautelook_alice.loader' => 'getHautelookAlice_LoaderService',
            'hautelook_alice.loader.yaml' => 'getHautelookAlice_Loader_YamlService',
            'hautelook_alice.solarium.loader' => 'getHautelookAlice_Solarium_LoaderService',
            'http_kernel' => 'getHttpKernelService',
            'kernel' => 'getKernelService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.console_very_verbose' => 'getMonolog_Handler_ConsoleVeryVerboseService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'nelmio_api_doc.annotations_provider.dunglas_api_annotation_provider' => 'getNelmioApiDoc_AnnotationsProvider_DunglasApiAnnotationProviderService',
            'nelmio_api_doc.doc_comment_extractor' => 'getNelmioApiDoc_DocCommentExtractorService',
            'nelmio_api_doc.event_listener.request' => 'getNelmioApiDoc_EventListener_RequestService',
            'nelmio_api_doc.extractor.api_doc_extractor' => 'getNelmioApiDoc_Extractor_ApiDocExtractorService',
            'nelmio_api_doc.form.extension.description_form_type_extension' => 'getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService',
            'nelmio_api_doc.formatter.html_formatter' => 'getNelmioApiDoc_Formatter_HtmlFormatterService',
            'nelmio_api_doc.formatter.markdown_formatter' => 'getNelmioApiDoc_Formatter_MarkdownFormatterService',
            'nelmio_api_doc.formatter.simple_formatter' => 'getNelmioApiDoc_Formatter_SimpleFormatterService',
            'nelmio_api_doc.formatter.swagger_formatter' => 'getNelmioApiDoc_Formatter_SwaggerFormatterService',
            'nelmio_api_doc.parser.collection_parser' => 'getNelmioApiDoc_Parser_CollectionParserService',
            'nelmio_api_doc.parser.dunglas_api_parser' => 'getNelmioApiDoc_Parser_DunglasApiParserService',
            'nelmio_api_doc.parser.form_errors_parser' => 'getNelmioApiDoc_Parser_FormErrorsParserService',
            'nelmio_api_doc.parser.form_type_parser' => 'getNelmioApiDoc_Parser_FormTypeParserService',
            'nelmio_api_doc.parser.json_serializable_parser' => 'getNelmioApiDoc_Parser_JsonSerializableParserService',
            'nelmio_api_doc.parser.validation_parser' => 'getNelmioApiDoc_Parser_ValidationParserService',
            'nelmio_api_doc.twig.extension.extra_markdown' => 'getNelmioApiDoc_Twig_Extension_ExtraMarkdownService',
            'nelmio_cors.cors_listener' => 'getNelmioCors_CorsListenerService',
            'nelmio_cors.options_provider.config' => 'getNelmioCors_OptionsProvider_ConfigService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'resource.book' => 'getResource_BookService',
            'resource.book.collection_operation.get' => 'getResource_Book_CollectionOperation_GetService',
            'resource.book.collection_operation.post' => 'getResource_Book_CollectionOperation_PostService',
            'resource.book.item_operation.delete' => 'getResource_Book_ItemOperation_DeleteService',
            'resource.book.item_operation.get' => 'getResource_Book_ItemOperation_GetService',
            'resource.book.item_operation.put' => 'getResource_Book_ItemOperation_PutService',
            'resource.organization' => 'getResource_OrganizationService',
            'resource.organization.collection_operation.get' => 'getResource_Organization_CollectionOperation_GetService',
            'resource.organization.collection_operation.post' => 'getResource_Organization_CollectionOperation_PostService',
            'resource.organization.item_operation.delete' => 'getResource_Organization_ItemOperation_DeleteService',
            'resource.organization.item_operation.get' => 'getResource_Organization_ItemOperation_GetService',
            'resource.organization.item_operation.put' => 'getResource_Organization_ItemOperation_PutService',
            'resource.person' => 'getResource_PersonService',
            'resource.person.collection_operation.get' => 'getResource_Person_CollectionOperation_GetService',
            'resource.person.collection_operation.post' => 'getResource_Person_CollectionOperation_PostService',
            'resource.person.item_operation.delete' => 'getResource_Person_ItemOperation_DeleteService',
            'resource.person.item_operation.get' => 'getResource_Person_ItemOperation_GetService',
            'resource.person.item_operation.put' => 'getResource_Person_ItemOperation_PutService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.default' => 'getSecurity_Firewall_Map_Context_DefaultService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_distribution.webconfigurator' => 'getSensioDistribution_WebconfiguratorService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'serializer' => 'getSerializerService',
            'serializer.mapping.class_metadata_factory' => 'getSerializer_Mapping_ClassMetadataFactoryService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator.selector' => 'getTranslator_SelectorService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mailer' => 'swiftmailer.mailer.default',
            'sensio.distribution.webconfigurator' => 'sensio_distribution.webconfigurator',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader($this->get('annotations.reader'), (__DIR__.'/annotations'), true);
    }

    /**
     * Gets the 'api.data_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Model\DataProviderChain A Dunglas\ApiBundle\Model\DataProviderChain instance.
     */
    public function getApi_DataProviderService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['api.data_provider'] = new DunglasApiBundleModelDataProviderChain_000000001286031e00000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getApi_DataProviderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Dunglas\ApiBundle\Model\DataProviderChain(array(0 => new \Dunglas\ApiBundle\Doctrine\Orm\DataProvider($this->get('doctrine'), NULL, 'page', 30, false, 'itemsPerPage')));
    }

    /**
     * Gets the 'api.doctrine.event_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Dunglas\ApiBundle\Doctrine\EventSubscriber A Dunglas\ApiBundle\Doctrine\EventSubscriber instance.
     */
    protected function getApi_Doctrine_EventSubscriberService()
    {
        return $this->services['api.doctrine.event_subscriber'] = new \Dunglas\ApiBundle\Doctrine\EventSubscriber($this->get('debug.event_dispatcher'), $this->get('doctrine'));
    }

    /**
     * Gets the 'api.hydra.documentation_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Dunglas\ApiBundle\Hydra\ApiDocumentationBuilder A Dunglas\ApiBundle\Hydra\ApiDocumentationBuilder instance.
     */
    protected function getApi_Hydra_DocumentationBuilderService()
    {
        return $this->services['api.hydra.documentation_builder'] = new \Dunglas\ApiBundle\Hydra\ApiDocumentationBuilder($this->get('api.resource_collection'), $this->get('api.json_ld.context_builder'), $this->get('router'), $this->get('api.mapping.class_metadata_factory'), 'Your API name', 'The full description of your API');
    }

    /**
     * Gets the 'api.hydra.listener.link_header_response' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Dunglas\ApiBundle\Hydra\EventListener\LinkHeaderResponseListener A Dunglas\ApiBundle\Hydra\EventListener\LinkHeaderResponseListener instance.
     */
    protected function getApi_Hydra_Listener_LinkHeaderResponseService()
    {
        return $this->services['api.hydra.listener.link_header_response'] = new \Dunglas\ApiBundle\Hydra\EventListener\LinkHeaderResponseListener($this->get('router'));
    }

    /**
     * Gets the 'api.hydra.listener.request_exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Dunglas\ApiBundle\Hydra\EventListener\RequestExceptionListener A Dunglas\ApiBundle\Hydra\EventListener\RequestExceptionListener instance.
     */
    protected function getApi_Hydra_Listener_RequestExceptionService()
    {
        return $this->services['api.hydra.listener.request_exception'] = new \Dunglas\ApiBundle\Hydra\EventListener\RequestExceptionListener($this->get('api.hydra.normalizer.error'));
    }

    /**
     * Gets the 'api.json_ld.context_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Dunglas\ApiBundle\JsonLd\ContextBuilder A Dunglas\ApiBundle\JsonLd\ContextBuilder instance.
     */
    protected function getApi_JsonLd_ContextBuilderService()
    {
        return $this->services['api.json_ld.context_builder'] = new \Dunglas\ApiBundle\JsonLd\ContextBuilder($this->get('router'), $this->get('debug.event_dispatcher'), $this->get('api.resource_collection'));
    }

    /**
     * Gets the 'api.json_ld.entrypoint_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\JsonLd\EntrypointBuilder A Dunglas\ApiBundle\JsonLd\EntrypointBuilder instance.
     */
    public function getApi_JsonLd_EntrypointBuilderService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['api.json_ld.entrypoint_builder'] = new DunglasApiBundleJsonLdEntrypointBuilder_00000000128603ca00000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getApi_JsonLd_EntrypointBuilderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Dunglas\ApiBundle\JsonLd\EntrypointBuilder($this->get('api.resource_collection'), $this->get('api.iri_converter'), $this->get('router'));
    }

    /**
     * Gets the 'api.json_ld.resource_context_builder_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Dunglas\ApiBundle\JsonLd\EventListener\ResourceContextBuilderListener A Dunglas\ApiBundle\JsonLd\EventListener\ResourceContextBuilderListener instance.
     */
    protected function getApi_JsonLd_ResourceContextBuilderListenerService()
    {
        return $this->services['api.json_ld.resource_context_builder_listener'] = new \Dunglas\ApiBundle\JsonLd\EventListener\ResourceContextBuilderListener($this->get('api.mapping.class_metadata_factory'), NULL);
    }

    /**
     * Gets the 'api.mapping.class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Dunglas\ApiBundle\Mapping\ClassMetadataFactory A Dunglas\ApiBundle\Mapping\ClassMetadataFactory instance.
     */
    protected function getApi_Mapping_ClassMetadataFactoryService()
    {
        $a = $this->get('doctrine.orm.default_entity_manager');

        $b = $a->getMetadataFactory();

        $c = new \PropertyInfo\Extractors\DoctrineExtractor($b);

        $d = new \PropertyInfo\Extractors\SetterExtractor();

        $e = new \PropertyInfo\Extractors\PhpDocExtractor();

        $f = new \PropertyInfo\PropertyInfo(array(0 => $c, 1 => $d, 2 => $e), array(0 => $e));

        return $this->services['api.mapping.class_metadata_factory'] = new \Dunglas\ApiBundle\Mapping\ClassMetadataFactory(new \Dunglas\ApiBundle\Mapping\Loader\LoaderChain(array(0 => new \Dunglas\ApiBundle\Mapping\Loader\AttributesLoader($this->get('api.resource_collection'), $f, $this->get('serializer.mapping.class_metadata_factory', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 1 => new \Dunglas\ApiBundle\Mapping\Loader\ValidatorMetadataLoader($this->get('validator')), 2 => new \Dunglas\ApiBundle\Mapping\Loader\PhpDocLoader($f), 3 => new \Dunglas\ApiBundle\Mapping\Loader\DoctrineIdentifierLoader($this->get('doctrine')), 4 => new \Dunglas\ApiBundle\Mapping\Loader\AnnotationLoader($this->get('annotations.reader')))));
    }

    /**
     * Gets the 'api.resource_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\ResourceCollection A Dunglas\ApiBundle\Api\ResourceCollection instance.
     */
    public function getApi_ResourceCollectionService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['api.resource_collection'] = new DunglasApiBundleApiResourceCollection_000000001286031900000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getApi_ResourceCollectionService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Dunglas\ApiBundle\Api\ResourceCollection();

        $instance->init(array(0 => $this->get('resource.book'), 1 => $this->get('resource.person'), 2 => $this->get('resource.organization')));

        return $instance;
    }

    /**
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance.
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance.
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer(new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($this->get('kernel'), $this->get('templating.filename_parser'), ($this->targetDirs[2].'/Resources')), $this->get('templating.locator')), 1 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator')), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /**
     * Gets the 'data_collector.dump' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector A Symfony\Component\HttpKernel\DataCollector\DumpDataCollector instance.
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance.
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance.
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance.
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener('', $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, NULL, true, NULL);
    }

    /**
     * Gets the 'debug.dump_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener A Symfony\Component\HttpKernel\EventListener\DumpListener instance.
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('data_collector.dump'));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'api.hydra.listener.link_header_response', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.exception', array(0 => 'api.hydra.listener.request_exception', 1 => 'onKernelException'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'nelmio_api_doc.event_listener.request', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'nelmio_cors.cors_listener', 1 => 'onKernelRequest'), 10000);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('monolog.handler.console_very_verbose', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('api.doctrine.event_subscriber', 'Dunglas\\ApiBundle\\Doctrine\\EventSubscriber');
        $instance->addSubscriberService('api.json_ld.resource_context_builder_listener', 'Dunglas\\ApiBundle\\JsonLd\\EventListener\\ResourceContextBuilderListener');
        $instance->addSubscriberService('fos_http_cache.event_listener.cache_control', 'FOS\\HttpCacheBundle\\EventListener\\CacheControlSubscriber');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'api', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driverOptions' => array()), $b, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultEntityListenerResolver A Doctrine\ORM\Mapping\DefaultEntityListenerResolver instance.
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => ($this->targetDirs[3].'/src/AppBundle/Entity'))), 'AppBundle\\Entity');

        $b = new \Doctrine\ORM\Configuration();
        $b->setEntityNamespaces(array('AppBundle' => 'AppBundle\\Entity'));
        $b->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $b->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $b->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $b->setMetadataDriverImpl($a);
        $b->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $b->setProxyNamespace('Proxies');
        $b->setAutoGenerateProxyClasses(true);
        $b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $b->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $b->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $b->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $b);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance.
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_8fb2b9c6e5033cd9378506e469fd0993da3d20ceb7a05d80b7a27c8bbbe04a17');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_8fb2b9c6e5033cd9378506e469fd0993da3d20ceb7a05d80b7a27c8bbbe04a17');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_8fb2b9c6e5033cd9378506e469fd0993da3d20ceb7a05d80b7a27c8bbbe04a17');

        return $instance;
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector', 4 => 'nelmio_api_doc.form.extension.description_form_type_extension'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance.
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance.
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance.
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance.
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance.
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'))));
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fos_http_cache.event_listener.cache_control' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\HttpCacheBundle\EventListener\CacheControlSubscriber A FOS\HttpCacheBundle\EventListener\CacheControlSubscriber instance.
     */
    protected function getFosHttpCache_EventListener_CacheControlService()
    {
        return $this->services['fos_http_cache.event_listener.cache_control'] = new \FOS\HttpCacheBundle\EventListener\CacheControlSubscriber('X-Cache-Debug');
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, true, $this->get('request_stack'));

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance.
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'hautelook_alice.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hautelook\AliceBundle\Alice\Loader A Hautelook\AliceBundle\Alice\Loader instance.
     */
    protected function getHautelookAlice_LoaderService()
    {
        return $this->services['hautelook_alice.loader'] = new \Hautelook\AliceBundle\Alice\Loader(array('yaml' => $this->get('hautelook_alice.loader.yaml')), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'hautelook_alice.loader.yaml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\Alice\Loader\Yaml A Nelmio\Alice\Loader\Yaml instance.
     */
    protected function getHautelookAlice_Loader_YamlService()
    {
        return $this->services['hautelook_alice.loader.yaml'] = new \Nelmio\Alice\Loader\Yaml('en_US', array(), 1);
    }

    /**
     * Gets the 'hautelook_alice.solarium.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hautelook\AliceBundle\Solarium\Loader A Hautelook\AliceBundle\Solarium\Loader instance.
     */
    protected function getHautelookAlice_Solarium_LoaderService()
    {
        return $this->services['hautelook_alice.solarium.loader'] = new \Hautelook\AliceBundle\Solarium\Loader(array('yaml' => $this->get('hautelook_alice.loader.yaml')), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'), false);
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(2 => 200, 3 => 100, 1 => 300, 4 => 100));
    }

    /**
     * Gets the 'monolog.handler.console_very_verbose' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleVeryVerboseService()
    {
        return $this->services['monolog.handler.console_very_verbose'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(2 => 250, 3 => 250, 4 => 100, 1 => 300));
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console_very_verbose'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.annotations_provider.dunglas_api_annotation_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Extractor\AnnotationsProvider\DunglasApiProvider A Nelmio\ApiDocBundle\Extractor\AnnotationsProvider\DunglasApiProvider instance.
     */
    protected function getNelmioApiDoc_AnnotationsProvider_DunglasApiAnnotationProviderService()
    {
        return $this->services['nelmio_api_doc.annotations_provider.dunglas_api_annotation_provider'] = new \Nelmio\ApiDocBundle\Extractor\AnnotationsProvider\DunglasApiProvider($this->get('api.resource_collection'), $this->get('api.hydra.documentation_builder'), $this->get('api.mapping.class_metadata_factory'));
    }

    /**
     * Gets the 'nelmio_api_doc.doc_comment_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Util\DocCommentExtractor A Nelmio\ApiDocBundle\Util\DocCommentExtractor instance.
     */
    protected function getNelmioApiDoc_DocCommentExtractorService()
    {
        return $this->services['nelmio_api_doc.doc_comment_extractor'] = new \Nelmio\ApiDocBundle\Util\DocCommentExtractor();
    }

    /**
     * Gets the 'nelmio_api_doc.event_listener.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\EventListener\RequestListener A Nelmio\ApiDocBundle\EventListener\RequestListener instance.
     */
    protected function getNelmioApiDoc_EventListener_RequestService()
    {
        return $this->services['nelmio_api_doc.event_listener.request'] = new \Nelmio\ApiDocBundle\EventListener\RequestListener($this->get('nelmio_api_doc.extractor.api_doc_extractor'), $this->get('nelmio_api_doc.formatter.html_formatter'), '_doc');
    }

    /**
     * Gets the 'nelmio_api_doc.extractor.api_doc_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Extractor\ApiDocExtractor A Nelmio\ApiDocBundle\Extractor\ApiDocExtractor instance.
     */
    protected function getNelmioApiDoc_Extractor_ApiDocExtractorService()
    {
        $a = $this->get('nelmio_api_doc.doc_comment_extractor');

        $this->services['nelmio_api_doc.extractor.api_doc_extractor'] = $instance = new \Nelmio\ApiDocBundle\Extractor\ApiDocExtractor($this, $this->get('router'), $this->get('annotation_reader'), $a, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel')), array(0 => new \Nelmio\ApiDocBundle\Extractor\Handler\FosRestHandler(), 1 => new \Nelmio\ApiDocBundle\Extractor\Handler\JmsSecurityExtraHandler(), 2 => new \Nelmio\ApiDocBundle\Extractor\Handler\SensioFrameworkExtraHandler(), 3 => new \Nelmio\ApiDocBundle\Extractor\Handler\PhpDocHandler($a)), array(0 => $this->get('nelmio_api_doc.annotations_provider.dunglas_api_annotation_provider')));

        $instance->addParser($this->get('nelmio_api_doc.parser.json_serializable_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.collection_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.form_errors_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.form_type_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.validation_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.dunglas_api_parser'));

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.form.extension.description_form_type_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension A Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension instance.
     */
    protected function getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService()
    {
        return $this->services['nelmio_api_doc.form.extension.description_form_type_extension'] = new \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension();
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.html_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\HtmlFormatter A Nelmio\ApiDocBundle\Formatter\HtmlFormatter instance.
     */
    protected function getNelmioApiDoc_Formatter_HtmlFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.html_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\HtmlFormatter();

        $instance->setTemplatingEngine($this->get('templating'));
        $instance->setMotdTemplate('NelmioApiDocBundle::Components/motd.html.twig');
        $instance->setApiName('API documentation');
        $instance->setEnableSandbox(true);
        $instance->setEndpoint(NULL);
        $instance->setRequestFormatMethod('format_param');
        $instance->setRequestFormats(array('json' => 'application/json'));
        $instance->setDefaultRequestFormat('json');
        $instance->setAcceptType('application/json');
        $instance->setBodyFormats(array(0 => 'json'));
        $instance->setDefaultBodyFormat('json');
        $instance->setAuthentication(NULL);
        $instance->setDefaultSectionsOpened(true);

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.markdown_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\MarkdownFormatter A Nelmio\ApiDocBundle\Formatter\MarkdownFormatter instance.
     */
    protected function getNelmioApiDoc_Formatter_MarkdownFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.markdown_formatter'] = new \Nelmio\ApiDocBundle\Formatter\MarkdownFormatter();
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.simple_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\SimpleFormatter A Nelmio\ApiDocBundle\Formatter\SimpleFormatter instance.
     */
    protected function getNelmioApiDoc_Formatter_SimpleFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.simple_formatter'] = new \Nelmio\ApiDocBundle\Formatter\SimpleFormatter();
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.swagger_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\SwaggerFormatter A Nelmio\ApiDocBundle\Formatter\SwaggerFormatter instance.
     */
    protected function getNelmioApiDoc_Formatter_SwaggerFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.swagger_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\SwaggerFormatter('dot_notation');

        $instance->setBasePath('/api');
        $instance->setApiVersion('0.1');
        $instance->setSwaggerVersion('1.2');
        $instance->setInfo(array('title' => 'Symfony2', 'description' => 'My awesome Symfony2 app!', 'TermsOfServiceUrl' => NULL, 'contact' => NULL, 'license' => NULL, 'licenseUrl' => NULL));

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.parser.collection_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\CollectionParser A Nelmio\ApiDocBundle\Parser\CollectionParser instance.
     */
    protected function getNelmioApiDoc_Parser_CollectionParserService()
    {
        return $this->services['nelmio_api_doc.parser.collection_parser'] = new \Nelmio\ApiDocBundle\Parser\CollectionParser();
    }

    /**
     * Gets the 'nelmio_api_doc.parser.dunglas_api_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\DunglasApiParser A Nelmio\ApiDocBundle\Parser\DunglasApiParser instance.
     */
    protected function getNelmioApiDoc_Parser_DunglasApiParserService()
    {
        return $this->services['nelmio_api_doc.parser.dunglas_api_parser'] = new \Nelmio\ApiDocBundle\Parser\DunglasApiParser($this->get('api.resource_collection'), $this->get('api.mapping.class_metadata_factory'));
    }

    /**
     * Gets the 'nelmio_api_doc.parser.form_errors_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\FormErrorsParser A Nelmio\ApiDocBundle\Parser\FormErrorsParser instance.
     */
    protected function getNelmioApiDoc_Parser_FormErrorsParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_errors_parser'] = new \Nelmio\ApiDocBundle\Parser\FormErrorsParser();
    }

    /**
     * Gets the 'nelmio_api_doc.parser.form_type_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\FormTypeParser A Nelmio\ApiDocBundle\Parser\FormTypeParser instance.
     */
    protected function getNelmioApiDoc_Parser_FormTypeParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_type_parser'] = new \Nelmio\ApiDocBundle\Parser\FormTypeParser($this->get('form.factory'), true);
    }

    /**
     * Gets the 'nelmio_api_doc.parser.json_serializable_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\JsonSerializableParser A Nelmio\ApiDocBundle\Parser\JsonSerializableParser instance.
     */
    protected function getNelmioApiDoc_Parser_JsonSerializableParserService()
    {
        return $this->services['nelmio_api_doc.parser.json_serializable_parser'] = new \Nelmio\ApiDocBundle\Parser\JsonSerializableParser();
    }

    /**
     * Gets the 'nelmio_api_doc.parser.validation_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\ValidationParser A Nelmio\ApiDocBundle\Parser\ValidationParser instance.
     */
    protected function getNelmioApiDoc_Parser_ValidationParserService()
    {
        return $this->services['nelmio_api_doc.parser.validation_parser'] = new \Nelmio\ApiDocBundle\Parser\ValidationParser($this->get('validator'));
    }

    /**
     * Gets the 'nelmio_api_doc.twig.extension.extra_markdown' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension A Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension instance.
     */
    protected function getNelmioApiDoc_Twig_Extension_ExtraMarkdownService()
    {
        return $this->services['nelmio_api_doc.twig.extension.extra_markdown'] = new \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension();
    }

    /**
     * Gets the 'nelmio_cors.cors_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener A Nelmio\CorsBundle\EventListener\CorsListener instance.
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->services['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener($this->get('debug.event_dispatcher'), new \Nelmio\CorsBundle\Options\Resolver(array(0 => $this->get('nelmio_cors.options_provider.config'))));
    }

    /**
     * Gets the 'nelmio_cors.options_provider.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\CorsBundle\Options\ConfigProvider A Nelmio\CorsBundle\Options\ConfigProvider instance.
     */
    protected function getNelmioCors_OptionsProvider_ConfigService()
    {
        return $this->services['nelmio_cors.options_provider.config'] = new \Nelmio\CorsBundle\Options\ConfigProvider(array('^/' => array()), array('allow_origin' => array(0 => 'http://localhost'), 'allow_credentials' => false, 'allow_headers' => array(0 => 'content-type', 1 => 'authorization'), 'expose_headers' => array(), 'allow_methods' => array(0 => 'POST', 1 => 'PUT', 2 => 'GET', 3 => 'DELETE', 4 => 'OPTIONS'), 'max_age' => 3600, 'hosts' => array(), 'origin_regex' => false));
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $d->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler'), '', '', 86400), $a);

        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Bundle\FrameworkBundle\DataCollector\AjaxDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.form'));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy')));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($d);
        $instance->add($this->get('data_collector.dump'));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false, $this->get('request_stack'));
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'resource.book.collection_operation.get' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Book_CollectionOperation_GetService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.book.collection_operation.get'] = new DunglasApiBundleApiOperationOperation_0000000012861fd700000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Book_CollectionOperation_GetService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createCollectionOperation($this->get('resource.book'), 'GET');
    }

    /**
     * Gets the 'resource.book.collection_operation.post' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Book_CollectionOperation_PostService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.book.collection_operation.post'] = new DunglasApiBundleApiOperationOperation_0000000012861feb00000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Book_CollectionOperation_PostService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createCollectionOperation($this->get('resource.book'), 'POST');
    }

    /**
     * Gets the 'resource.book.item_operation.delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Book_ItemOperation_DeleteService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.book.item_operation.delete'] = new DunglasApiBundleApiOperationOperation_0000000012861fd300000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Book_ItemOperation_DeleteService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createItemOperation($this->get('resource.book'), 'DELETE');
    }

    /**
     * Gets the 'resource.book.item_operation.get' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Book_ItemOperation_GetService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.book.item_operation.get'] = new DunglasApiBundleApiOperationOperation_0000000012861fdb00000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Book_ItemOperation_GetService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createItemOperation($this->get('resource.book'), 'GET');
    }

    /**
     * Gets the 'resource.book.item_operation.put' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Book_ItemOperation_PutService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.book.item_operation.put'] = new DunglasApiBundleApiOperationOperation_0000000012861fdf00000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Book_ItemOperation_PutService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createItemOperation($this->get('resource.book'), 'PUT');
    }

    /**
     * Gets the 'resource.organization.collection_operation.get' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Organization_CollectionOperation_GetService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.organization.collection_operation.get'] = new DunglasApiBundleApiOperationOperation_0000000012861f8d00000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Organization_CollectionOperation_GetService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createCollectionOperation($this->get('resource.organization'), 'GET');
    }

    /**
     * Gets the 'resource.organization.collection_operation.post' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Organization_CollectionOperation_PostService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.organization.collection_operation.post'] = new DunglasApiBundleApiOperationOperation_0000000012861f8100000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Organization_CollectionOperation_PostService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createCollectionOperation($this->get('resource.organization'), 'POST');
    }

    /**
     * Gets the 'resource.organization.item_operation.delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Organization_ItemOperation_DeleteService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.organization.item_operation.delete'] = new DunglasApiBundleApiOperationOperation_0000000012861f8900000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Organization_ItemOperation_DeleteService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createItemOperation($this->get('resource.organization'), 'DELETE');
    }

    /**
     * Gets the 'resource.organization.item_operation.get' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Organization_ItemOperation_GetService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.organization.item_operation.get'] = new DunglasApiBundleApiOperationOperation_0000000012861ff100000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Organization_ItemOperation_GetService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createItemOperation($this->get('resource.organization'), 'GET');
    }

    /**
     * Gets the 'resource.organization.item_operation.put' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Organization_ItemOperation_PutService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.organization.item_operation.put'] = new DunglasApiBundleApiOperationOperation_0000000012861ff500000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Organization_ItemOperation_PutService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createItemOperation($this->get('resource.organization'), 'PUT');
    }

    /**
     * Gets the 'resource.person.collection_operation.get' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Person_CollectionOperation_GetService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.person.collection_operation.get'] = new DunglasApiBundleApiOperationOperation_0000000012861ff800000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Person_CollectionOperation_GetService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createCollectionOperation($this->get('resource.person'), 'GET');
    }

    /**
     * Gets the 'resource.person.collection_operation.post' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Person_CollectionOperation_PostService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.person.collection_operation.post'] = new DunglasApiBundleApiOperationOperation_0000000012861ffc00000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Person_CollectionOperation_PostService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createCollectionOperation($this->get('resource.person'), 'POST');
    }

    /**
     * Gets the 'resource.person.item_operation.delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Person_ItemOperation_DeleteService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.person.item_operation.delete'] = new DunglasApiBundleApiOperationOperation_0000000012861fe400000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Person_ItemOperation_DeleteService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createItemOperation($this->get('resource.person'), 'DELETE');
    }

    /**
     * Gets the 'resource.person.item_operation.get' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Person_ItemOperation_GetService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.person.item_operation.get'] = new DunglasApiBundleApiOperationOperation_0000000012861fec00000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Person_ItemOperation_GetService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createItemOperation($this->get('resource.person'), 'GET');
    }

    /**
     * Gets the 'resource.person.item_operation.put' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Operation\Operation A Dunglas\ApiBundle\Api\Operation\Operation instance.
     */
    public function getResource_Person_ItemOperation_PutService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.person.item_operation.put'] = new DunglasApiBundleApiOperationOperation_0000000012861fe000000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_Person_ItemOperation_PutService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return $this->get('api.operation_factory')->createItemOperation($this->get('resource.person'), 'PUT');
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance.
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[2].'/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevUrlMatcher', 'strict_requirements' => true), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader(new \Dunglas\ApiBundle\Routing\ApiLoader($this->get('api.resource_collection'), $this->get('kernel')));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance.
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance.
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance.
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator($this->get('security.secure_random')), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance.
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array());
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt|error)|css|images|js)/'), 'security.firewall.map.context.default' => NULL)), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DefaultService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = $this->get('security.authentication.manager');
        $d = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $e = new \Symfony\Component\Security\Http\AccessMap();

        return $this->services['security.firewall.map.context.default'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($e, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => new \Symfony\Component\Security\Core\User\InMemoryUserProvider()), 'default', $a, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '56891cbf68aa16.39508299', $a, $c), 3 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $e, $c)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), new \Symfony\Component\Security\Http\HttpUtils($d, $d), 'default', NULL, NULL, NULL, $a, false));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance.
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance.
     */
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom((__DIR__.'/secure_random.seed'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance.
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance.
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance.
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance.
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the 'sensio_distribution.webconfigurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\DistributionBundle\Configurator\Configurator A Sensio\Bundle\DistributionBundle\Configurator\Configurator instance.
     */
    protected function getSensioDistribution_WebconfiguratorService()
    {
        $this->services['sensio_distribution.webconfigurator'] = $instance = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator($this->targetDirs[2]);

        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\DoctrineStep(), 10);
        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\SecretStep(), 0);

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance.
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance.
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance.
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance.
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance.
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance.
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance.
     */
    protected function getSerializerService()
    {
        $a = $this->get('api.resource_collection');
        $b = $this->get('api.json_ld.context_builder');
        $c = $this->get('property_accessor');

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \Dunglas\ApiBundle\JsonLd\Serializer\DateTimeNormalizer(), 1 => new \Dunglas\ApiBundle\Hydra\Serializer\CollectionNormalizer($a, $b, 'page'), 2 => new \Dunglas\ApiBundle\JsonLd\Serializer\ItemNormalizer($a, $this->get('api.iri_converter'), $this->get('api.mapping.class_metadata_factory'), $b, $c, NULL), 3 => $this->get('api.hydra.normalizer.constraint_violation_list'), 4 => $this->get('api.hydra.normalizer.error'), 5 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($this->get('serializer.mapping.class_metadata_factory'), NULL, $c)), array(0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Dunglas\ApiBundle\JsonLd\Serializer\JsonLdEncoder()));
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance.
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance.
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance.
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper instance.
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance.
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance.
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator A Symfony\Component\Translation\IdentityTranslator instance.
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator($this->get('translator.selector'));
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        return $this->services['translator.default'] = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, $this->get('translator.selector'), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true), array());
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance.
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');
        $c = $this->get('fragment.handler');

        $d = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b);

        $e = new \Symfony\Bridge\Twig\AppVariable();
        $e->setEnvironment('dev');
        $e->setDebug(true);
        if ($this->has('security.token_storage')) {
            $e->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $e->setRequestStack($b);
        }
        $e->setContainer($this);

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'filename', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $d));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($c));
        $instance->addExtension($d);
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('nelmio_api_doc.twig.extension.extra_markdown'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner')));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addGlobal('app', $e);
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views'), 'NelmioApiDoc');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views'), 'SensioDistribution');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance.
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance.
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance.
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance.
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the 'var_dumper.cli_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper A Symfony\Component\VarDumper\Dumper\CliDumper instance.
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8');
    }

    /**
     * Gets the 'var_dumper.cloner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner A Symfony\Component\VarDumper\Cloner\VarCloner instance.
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance.
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig'), 'data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance.
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt');
    }

    /**
     * Gets the 'annotations.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance.
     */
    protected function getAnnotations_ReaderService()
    {
        return $this->services['annotations.reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the 'api.hydra.normalizer.constraint_violation_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Hydra\Serializer\ConstraintViolationListNormalizer A Dunglas\ApiBundle\Hydra\Serializer\ConstraintViolationListNormalizer instance.
     */
    public function getApi_Hydra_Normalizer_ConstraintViolationListService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['api.hydra.normalizer.constraint_violation_list'] = new DunglasApiBundleHydraSerializerConstraintViolationListNormalizer_00000000128603f300000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getApi_Hydra_Normalizer_ConstraintViolationListService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Dunglas\ApiBundle\Hydra\Serializer\ConstraintViolationListNormalizer($this->get('router'));
    }

    /**
     * Gets the 'api.hydra.normalizer.error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Hydra\Serializer\ErrorNormalizer A Dunglas\ApiBundle\Hydra\Serializer\ErrorNormalizer instance.
     */
    public function getApi_Hydra_Normalizer_ErrorService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['api.hydra.normalizer.error'] = new DunglasApiBundleHydraSerializerErrorNormalizer_00000000128603f200000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getApi_Hydra_Normalizer_ErrorService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Dunglas\ApiBundle\Hydra\Serializer\ErrorNormalizer($this->get('router'), true);
    }

    /**
     * Gets the 'api.iri_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Dunglas\ApiBundle\Api\IriConverter A Dunglas\ApiBundle\Api\IriConverter instance.
     */
    protected function getApi_IriConverterService()
    {
        return $this->services['api.iri_converter'] = new \Dunglas\ApiBundle\Api\IriConverter($this->get('api.resource_collection'), $this->get('api.data_provider'), $this->get('api.mapping.class_metadata_factory'), new \Dunglas\ApiBundle\Routing\Router($this->get('router')), $this->get('property_accessor'));
    }

    /**
     * Gets the 'api.operation_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Dunglas\ApiBundle\Api\Operation\OperationFactory A Dunglas\ApiBundle\Api\Operation\OperationFactory instance.
     */
    protected function getApi_OperationFactoryService()
    {
        return $this->services['api.operation_factory'] = new \Dunglas\ApiBundle\Api\Operation\OperationFactory();
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'resource.book' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Resource A Dunglas\ApiBundle\Api\Resource instance.
     */
    public function getResource_BookService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.book'] = new DunglasApiBundleApiResource_0000000012861fa600000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_BookService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Dunglas\ApiBundle\Api\Resource('AppBundle\\Entity\\Book');

        $instance->initItemOperations(array(0 => $this->get('resource.book.item_operation.get'), 1 => $this->get('resource.book.item_operation.put'), 2 => $this->get('resource.book.item_operation.delete')));
        $instance->initCollectionOperations(array(0 => $this->get('resource.book.collection_operation.get'), 1 => $this->get('resource.book.collection_operation.post')));

        return $instance;
    }

    /**
     * Gets the 'resource.organization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Resource A Dunglas\ApiBundle\Api\Resource instance.
     */
    public function getResource_OrganizationService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.organization'] = new DunglasApiBundleApiResource_0000000012861fa400000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_OrganizationService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Dunglas\ApiBundle\Api\Resource('AppBundle\\Entity\\Organization');

        $instance->initFilters(array(0 => new \Dunglas\ApiBundle\Doctrine\Orm\Filter\SearchFilter($this->get('doctrine'), $this->get('api.iri_converter'), $this->get('property_accessor'), array('name' => 'exact', 'url' => 'partial'))));
        $instance->initItemOperations(array(0 => $this->get('resource.organization.item_operation.get'), 1 => $this->get('resource.organization.item_operation.put'), 2 => $this->get('resource.organization.item_operation.delete')));
        $instance->initCollectionOperations(array(0 => $this->get('resource.organization.collection_operation.get'), 1 => $this->get('resource.organization.collection_operation.post')));

        return $instance;
    }

    /**
     * Gets the 'resource.person' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Dunglas\ApiBundle\Api\Resource A Dunglas\ApiBundle\Api\Resource instance.
     */
    public function getResource_PersonService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['resource.person'] = new DunglasApiBundleApiResource_0000000012861fa700000001571256ad21cdc36970661c68ecf61f97f966b596(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getResource_PersonService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Dunglas\ApiBundle\Api\Resource('AppBundle\\Entity\\Person');

        $instance->initItemOperations(array(0 => $this->get('resource.person.item_operation.get'), 1 => $this->get('resource.person.item_operation.put'), 2 => $this->get('resource.person.item_operation.delete')));
        $instance->initCollectionOperations(array(0 => $this->get('resource.person.collection_operation.get'), 1 => $this->get('resource.person.collection_operation.post')));

        return $instance;
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.role_hierarchy');
        $b = $this->get('security.authentication.trust_resolver');

        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $a), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b)), 'affirmative', false, true);
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('56891cbf68aa16.39508299')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance.
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->services['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance.
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /**
     * Gets the 'serializer.mapping.class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory A Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory instance.
     */
    protected function getSerializer_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')))), NULL);
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance.
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the 'translator.selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Translation\MessageSelector A Symfony\Component\Translation\MessageSelector instance.
     */
    protected function getTranslator_SelectorService()
    {
        return $this->services['translator.selector'] = new \Symfony\Component\Translation\MessageSelector();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DunglasApiBundle' => 'Dunglas\\ApiBundle\\DunglasApiBundle',
                'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'FOSHttpCacheBundle' => 'FOS\\HttpCacheBundle\\FOSHttpCacheBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'HautelookAliceBundle' => 'Hautelook\\AliceBundle\\HautelookAliceBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'api',
            'database_user' => 'root',
            'database_password' => NULL,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'locale' => 'en',
            'cors_allow_origin' => 'http://localhost',
            'api_name' => 'Your API name',
            'api_description' => 'The full description of your API',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => false,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'form.resolved_type_factory.data_collector_proxy.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy',
            'form.type_extension.form.data_collector.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension',
            'data_collector.form.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector',
            'data_collector.form.extractor.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevUrlMatcher',
            'router.options.generator.cache_class' => 'appDevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[2].'/config/routing_dev.yml'),
            'router.cache_class_prefix' => 'appDev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'serializer.class' => 'Symfony\\Component\\Serializer\\Serializer',
            'serializer.encoder.xml.class' => 'Symfony\\Component\\Serializer\\Encoder\\XmlEncoder',
            'serializer.encoder.json.class' => 'Symfony\\Component\\Serializer\\Encoder\\JsonEncoder',
            'serializer.mapping.cache.prefix' => '',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(

            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console_very_verbose' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'api.title' => 'Your API name',
            'api.description' => 'The full description of your API',
            'api.collection.filter_name.order' => 'order',
            'api.collection.order' => NULL,
            'api.collection.pagination.page_parameter_name' => 'page',
            'api.collection.pagination.items_per_page.number' => 30,
            'api.collection.pagination.items_per_page.enable_client_request' => false,
            'api.collection.pagination.items_per_page.parameter_name' => 'itemsPerPage',
            'api.mapping.cache.prefix' => '',
            'nelmio_api_doc.motd.template' => 'NelmioApiDocBundle::Components/motd.html.twig',
            'nelmio_api_doc.exclude_sections' => array(

            ),
            'nelmio_api_doc.default_sections_opened' => true,
            'nelmio_api_doc.api_name' => 'API documentation',
            'nelmio_api_doc.sandbox.enabled' => true,
            'nelmio_api_doc.sandbox.endpoint' => NULL,
            'nelmio_api_doc.sandbox.accept_type' => 'application/json',
            'nelmio_api_doc.sandbox.body_format.formats' => array(
                0 => 'json',
            ),
            'nelmio_api_doc.sandbox.body_format.default_format' => 'json',
            'nelmio_api_doc.sandbox.request_format.method' => 'format_param',
            'nelmio_api_doc.sandbox.request_format.default_format' => 'json',
            'nelmio_api_doc.sandbox.request_format.formats' => array(
                'json' => 'application/json',
            ),
            'nelmio_api_doc.sandbox.entity_to_choice' => true,
            'nelmio_api_doc.formatter.abstract_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\AbstractFormatter',
            'nelmio_api_doc.formatter.markdown_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\MarkdownFormatter',
            'nelmio_api_doc.formatter.simple_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SimpleFormatter',
            'nelmio_api_doc.formatter.html_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\HtmlFormatter',
            'nelmio_api_doc.formatter.swagger_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SwaggerFormatter',
            'nelmio_api_doc.sandbox.authentication' => NULL,
            'nelmio_api_doc.extractor.api_doc_extractor.class' => 'Nelmio\\ApiDocBundle\\Extractor\\ApiDocExtractor',
            'nelmio_api_doc.form.extension.description_form_type_extension.class' => 'Nelmio\\ApiDocBundle\\Form\\Extension\\DescriptionFormTypeExtension',
            'nelmio_api_doc.twig.extension.extra_markdown.class' => 'Nelmio\\ApiDocBundle\\Twig\\Extension\\MarkdownExtension',
            'nelmio_api_doc.doc_comment_extractor.class' => 'Nelmio\\ApiDocBundle\\Util\\DocCommentExtractor',
            'nelmio_api_doc.extractor.handler.fos_rest.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\FosRestHandler',
            'nelmio_api_doc.extractor.handler.jms_security.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\JmsSecurityExtraHandler',
            'nelmio_api_doc.extractor.handler.sensio_framework_extra.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\SensioFrameworkExtraHandler',
            'nelmio_api_doc.extractor.handler.phpdoc.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\PhpDocHandler',
            'nelmio_api_doc.parser.collection_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\CollectionParser',
            'nelmio_api_doc.parser.form_errors_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormErrorsParser',
            'nelmio_api_doc.parser.json_serializable_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\JsonSerializableParser',
            'nelmio_api_doc.request_listener.parameter' => '_doc',
            'nelmio_api_doc.event_listener.request.class' => 'Nelmio\\ApiDocBundle\\EventListener\\RequestListener',
            'nelmio_api_doc.swagger.base_path' => '/api',
            'nelmio_api_doc.swagger.swagger_version' => '1.2',
            'nelmio_api_doc.swagger.api_version' => '0.1',
            'nelmio_api_doc.swagger.info' => array(
                'title' => 'Symfony2',
                'description' => 'My awesome Symfony2 app!',
                'TermsOfServiceUrl' => NULL,
                'contact' => NULL,
                'license' => NULL,
                'licenseUrl' => NULL,
            ),
            'nelmio_api_doc.swagger.model_naming_strategy' => 'dot_notation',
            'nelmio_cors.defaults' => array(
                'allow_origin' => array(
                    0 => 'http://localhost',
                ),
                'allow_credentials' => false,
                'allow_headers' => array(
                    0 => 'content-type',
                    1 => 'authorization',
                ),
                'expose_headers' => array(

                ),
                'allow_methods' => array(
                    0 => 'POST',
                    1 => 'PUT',
                    2 => 'GET',
                    3 => 'DELETE',
                    4 => 'OPTIONS',
                ),
                'max_age' => 3600,
                'hosts' => array(

                ),
                'origin_regex' => false,
            ),
            'nelmio_cors.map' => array(
                '^/' => array(

                ),
            ),
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'fos_http_cache.request_matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'fos_http_cache.rule_matcher.class' => 'FOS\\HttpCacheBundle\\Http\\RuleMatcher',
            'fos_http_cache.debug_header' => 'X-Cache-Debug',
            'fos_http_cache.event_listener.cache_control.class' => 'FOS\\HttpCacheBundle\\EventListener\\CacheControlSubscriber',
            'fos_http_cache.compiler_pass.tag_annotations' => false,
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'twig.extension.webprofiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'sensio_distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'sensio_distribution.webconfigurator.doctrine_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\DoctrineStep',
            'sensio_distribution.webconfigurator.secret_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\SecretStep',
            'sensio_distribution.security_checker.class' => 'SensioLabs\\Security\\SecurityChecker',
            'sensio_distribution.security_checker.command.class' => 'SensioLabs\\Security\\Command\\SecurityCheckerCommand',
            'hautelook_alice.locale' => 'en_US',
            'hautelook_alice.seed' => 1,
            'hautelook_alice.loader.yaml.class' => 'Nelmio\\Alice\\Loader\\Yaml',
            'hautelook_alice.loader.class' => 'Hautelook\\AliceBundle\\Alice\\Loader',
            'hautelook_alice.solarium.loader.class' => 'Hautelook\\AliceBundle\\Solarium\\Loader',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sensio_distribution.security_checker.command',
            ),
            'nelmio_api_doc.parser.form_type_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormTypeParser',
            'nelmio_api_doc.parser.validation_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\ValidationParser',
        );
    }
}

class DunglasApiBundleApiResource_0000000012861fa600000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Resource implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc04a117078841839 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc04a1da898189706 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc049acd508308322 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getEntityClass()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'getEntityClass', array(), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->getEntityClass();
    }

    /**
     * {@inheritDoc}
     */
    public function initCollectionOperations(array $collectionOperations)
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'initCollectionOperations', array('collectionOperations' => $collectionOperations), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->initCollectionOperations($collectionOperations);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollectionOperations()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'getCollectionOperations', array(), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->getCollectionOperations();
    }

    /**
     * {@inheritDoc}
     */
    public function initItemOperations(array $itemOperations)
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'initItemOperations', array('itemOperations' => $itemOperations), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->initItemOperations($itemOperations);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemOperations()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'getItemOperations', array(), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->getItemOperations();
    }

    /**
     * {@inheritDoc}
     */
    public function initFilters(array $filters)
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'initFilters', array('filters' => $filters), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->initFilters($filters);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'getFilters', array(), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function initNormalizationContext(array $normalizationContext)
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'initNormalizationContext', array('normalizationContext' => $normalizationContext), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->initNormalizationContext($normalizationContext);
    }

    /**
     * {@inheritDoc}
     */
    public function getNormalizationContext()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'getNormalizationContext', array(), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->getNormalizationContext();
    }

    /**
     * {@inheritDoc}
     */
    public function getNormalizationGroups()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'getNormalizationGroups', array(), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->getNormalizationGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function initDenormalizationContext(array $denormalizationContext)
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'initDenormalizationContext', array('denormalizationContext' => $denormalizationContext), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->initDenormalizationContext($denormalizationContext);
    }

    /**
     * {@inheritDoc}
     */
    public function getDenormalizationContext()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'getDenormalizationContext', array(), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->getDenormalizationContext();
    }

    /**
     * {@inheritDoc}
     */
    public function getDenormalizationGroups()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'getDenormalizationGroups', array(), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->getDenormalizationGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function initValidationGroups(array $validationGroups)
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'initValidationGroups', array('validationGroups' => $validationGroups), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->initValidationGroups($validationGroups);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidationGroups()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'getValidationGroups', array(), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->getValidationGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function initShortName($shortName)
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'initShortName', array('shortName' => $shortName), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->initShortName($shortName);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortName()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'getShortName', array(), $this->initializer56891cc04a1da898189706);

        return $this->valueHolder56891cc04a117078841839->getShortName();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc04a1da898189706 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, '__get', array('name' => $name), $this->initializer56891cc04a1da898189706);

        if (isset(self::$publicProperties56891cc049acd508308322[$name])) {
            return $this->valueHolder56891cc04a117078841839->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc04a117078841839;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc04a117078841839;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc04a1da898189706);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc04a117078841839;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc04a117078841839;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, '__isset', array('name' => $name), $this->initializer56891cc04a1da898189706);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc04a117078841839;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc04a117078841839;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, '__unset', array('name' => $name), $this->initializer56891cc04a1da898189706);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc04a117078841839;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc04a117078841839;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, '__clone', array(), $this->initializer56891cc04a1da898189706);

        $this->valueHolder56891cc04a117078841839 = clone $this->valueHolder56891cc04a117078841839;
    }

    public function __sleep()
    {
        $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, '__sleep', array(), $this->initializer56891cc04a1da898189706);

        return array('valueHolder56891cc04a117078841839');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc04a1da898189706 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc04a1da898189706;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc04a1da898189706 && $this->initializer56891cc04a1da898189706->__invoke($this->valueHolder56891cc04a117078841839, $this, 'initializeProxy', array(), $this->initializer56891cc04a1da898189706);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc04a117078841839;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc04a117078841839;
    }


}

class DunglasApiBundleApiResource_0000000012861fa700000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Resource implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc05224c155802636 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc05226d765138198 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc0521f7471469017 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getEntityClass()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'getEntityClass', array(), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->getEntityClass();
    }

    /**
     * {@inheritDoc}
     */
    public function initCollectionOperations(array $collectionOperations)
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'initCollectionOperations', array('collectionOperations' => $collectionOperations), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->initCollectionOperations($collectionOperations);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollectionOperations()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'getCollectionOperations', array(), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->getCollectionOperations();
    }

    /**
     * {@inheritDoc}
     */
    public function initItemOperations(array $itemOperations)
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'initItemOperations', array('itemOperations' => $itemOperations), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->initItemOperations($itemOperations);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemOperations()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'getItemOperations', array(), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->getItemOperations();
    }

    /**
     * {@inheritDoc}
     */
    public function initFilters(array $filters)
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'initFilters', array('filters' => $filters), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->initFilters($filters);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'getFilters', array(), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function initNormalizationContext(array $normalizationContext)
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'initNormalizationContext', array('normalizationContext' => $normalizationContext), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->initNormalizationContext($normalizationContext);
    }

    /**
     * {@inheritDoc}
     */
    public function getNormalizationContext()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'getNormalizationContext', array(), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->getNormalizationContext();
    }

    /**
     * {@inheritDoc}
     */
    public function getNormalizationGroups()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'getNormalizationGroups', array(), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->getNormalizationGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function initDenormalizationContext(array $denormalizationContext)
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'initDenormalizationContext', array('denormalizationContext' => $denormalizationContext), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->initDenormalizationContext($denormalizationContext);
    }

    /**
     * {@inheritDoc}
     */
    public function getDenormalizationContext()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'getDenormalizationContext', array(), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->getDenormalizationContext();
    }

    /**
     * {@inheritDoc}
     */
    public function getDenormalizationGroups()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'getDenormalizationGroups', array(), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->getDenormalizationGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function initValidationGroups(array $validationGroups)
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'initValidationGroups', array('validationGroups' => $validationGroups), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->initValidationGroups($validationGroups);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidationGroups()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'getValidationGroups', array(), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->getValidationGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function initShortName($shortName)
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'initShortName', array('shortName' => $shortName), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->initShortName($shortName);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortName()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'getShortName', array(), $this->initializer56891cc05226d765138198);

        return $this->valueHolder56891cc05224c155802636->getShortName();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc05226d765138198 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, '__get', array('name' => $name), $this->initializer56891cc05226d765138198);

        if (isset(self::$publicProperties56891cc0521f7471469017[$name])) {
            return $this->valueHolder56891cc05224c155802636->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05224c155802636;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc05224c155802636;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc05226d765138198);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05224c155802636;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc05224c155802636;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, '__isset', array('name' => $name), $this->initializer56891cc05226d765138198);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05224c155802636;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc05224c155802636;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, '__unset', array('name' => $name), $this->initializer56891cc05226d765138198);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05224c155802636;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc05224c155802636;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, '__clone', array(), $this->initializer56891cc05226d765138198);

        $this->valueHolder56891cc05224c155802636 = clone $this->valueHolder56891cc05224c155802636;
    }

    public function __sleep()
    {
        $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, '__sleep', array(), $this->initializer56891cc05226d765138198);

        return array('valueHolder56891cc05224c155802636');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc05226d765138198 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc05226d765138198;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc05226d765138198 && $this->initializer56891cc05226d765138198->__invoke($this->valueHolder56891cc05224c155802636, $this, 'initializeProxy', array(), $this->initializer56891cc05226d765138198);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc05224c155802636;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc05224c155802636;
    }


}

class DunglasApiBundleApiResource_0000000012861fa400000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Resource implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc05762b309184792 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc057652423996354 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc0575d4540078128 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getEntityClass()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'getEntityClass', array(), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->getEntityClass();
    }

    /**
     * {@inheritDoc}
     */
    public function initCollectionOperations(array $collectionOperations)
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'initCollectionOperations', array('collectionOperations' => $collectionOperations), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->initCollectionOperations($collectionOperations);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollectionOperations()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'getCollectionOperations', array(), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->getCollectionOperations();
    }

    /**
     * {@inheritDoc}
     */
    public function initItemOperations(array $itemOperations)
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'initItemOperations', array('itemOperations' => $itemOperations), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->initItemOperations($itemOperations);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemOperations()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'getItemOperations', array(), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->getItemOperations();
    }

    /**
     * {@inheritDoc}
     */
    public function initFilters(array $filters)
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'initFilters', array('filters' => $filters), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->initFilters($filters);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'getFilters', array(), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function initNormalizationContext(array $normalizationContext)
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'initNormalizationContext', array('normalizationContext' => $normalizationContext), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->initNormalizationContext($normalizationContext);
    }

    /**
     * {@inheritDoc}
     */
    public function getNormalizationContext()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'getNormalizationContext', array(), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->getNormalizationContext();
    }

    /**
     * {@inheritDoc}
     */
    public function getNormalizationGroups()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'getNormalizationGroups', array(), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->getNormalizationGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function initDenormalizationContext(array $denormalizationContext)
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'initDenormalizationContext', array('denormalizationContext' => $denormalizationContext), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->initDenormalizationContext($denormalizationContext);
    }

    /**
     * {@inheritDoc}
     */
    public function getDenormalizationContext()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'getDenormalizationContext', array(), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->getDenormalizationContext();
    }

    /**
     * {@inheritDoc}
     */
    public function getDenormalizationGroups()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'getDenormalizationGroups', array(), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->getDenormalizationGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function initValidationGroups(array $validationGroups)
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'initValidationGroups', array('validationGroups' => $validationGroups), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->initValidationGroups($validationGroups);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidationGroups()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'getValidationGroups', array(), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->getValidationGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function initShortName($shortName)
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'initShortName', array('shortName' => $shortName), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->initShortName($shortName);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortName()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'getShortName', array(), $this->initializer56891cc057652423996354);

        return $this->valueHolder56891cc05762b309184792->getShortName();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc057652423996354 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, '__get', array('name' => $name), $this->initializer56891cc057652423996354);

        if (isset(self::$publicProperties56891cc0575d4540078128[$name])) {
            return $this->valueHolder56891cc05762b309184792->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05762b309184792;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc05762b309184792;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc057652423996354);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05762b309184792;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc05762b309184792;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, '__isset', array('name' => $name), $this->initializer56891cc057652423996354);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05762b309184792;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc05762b309184792;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, '__unset', array('name' => $name), $this->initializer56891cc057652423996354);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05762b309184792;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc05762b309184792;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, '__clone', array(), $this->initializer56891cc057652423996354);

        $this->valueHolder56891cc05762b309184792 = clone $this->valueHolder56891cc05762b309184792;
    }

    public function __sleep()
    {
        $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, '__sleep', array(), $this->initializer56891cc057652423996354);

        return array('valueHolder56891cc05762b309184792');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc057652423996354 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc057652423996354;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc057652423996354 && $this->initializer56891cc057652423996354->__invoke($this->valueHolder56891cc05762b309184792, $this, 'initializeProxy', array(), $this->initializer56891cc057652423996354);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc05762b309184792;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc05762b309184792;
    }


}

class DunglasApiBundleApiResourceCollection_000000001286031900000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\ResourceCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc05c0ca011782772 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc05c10a921572525 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc05c03b926867178 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function init(array $resources)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'init', array('resources' => $resources), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->init($resources);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceForEntity($entityClass)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'getResourceForEntity', array('entityClass' => $entityClass), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->getResourceForEntity($entityClass);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceForShortName($shortName)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'getResourceForShortName', array('shortName' => $shortName), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->getResourceForShortName($shortName);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($index)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'offsetExists', array('index' => $index), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->offsetExists($index);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($index)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'offsetGet', array('index' => $index), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->offsetGet($index);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($index, $newval)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'offsetSet', array('index' => $index, 'newval' => $newval), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->offsetSet($index, $newval);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($index)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'offsetUnset', array('index' => $index), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->offsetUnset($index);
    }

    /**
     * {@inheritDoc}
     */
    public function append($value)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'append', array('value' => $value), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->append($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getArrayCopy()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'getArrayCopy', array(), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->getArrayCopy();
    }

    /**
     * {@inheritDoc}
     */
    public function count()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'count', array(), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->count();
    }

    /**
     * {@inheritDoc}
     */
    public function getFlags()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'getFlags', array(), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->getFlags();
    }

    /**
     * {@inheritDoc}
     */
    public function setFlags($flags)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'setFlags', array('flags' => $flags), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->setFlags($flags);
    }

    /**
     * {@inheritDoc}
     */
    public function asort()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'asort', array(), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->asort();
    }

    /**
     * {@inheritDoc}
     */
    public function ksort()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'ksort', array(), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->ksort();
    }

    /**
     * {@inheritDoc}
     */
    public function uasort($cmp_function)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'uasort', array('cmp_function' => $cmp_function), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->uasort($cmp_function);
    }

    /**
     * {@inheritDoc}
     */
    public function uksort($cmp_function)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'uksort', array('cmp_function' => $cmp_function), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->uksort($cmp_function);
    }

    /**
     * {@inheritDoc}
     */
    public function natsort()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'natsort', array(), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->natsort();
    }

    /**
     * {@inheritDoc}
     */
    public function natcasesort()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'natcasesort', array(), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->natcasesort();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'unserialize', array('serialized' => $serialized), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'serialize', array(), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function getIterator()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'getIterator', array(), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->getIterator();
    }

    /**
     * {@inheritDoc}
     */
    public function exchangeArray($array)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'exchangeArray', array('array' => $array), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->exchangeArray($array);
    }

    /**
     * {@inheritDoc}
     */
    public function setIteratorClass($iteratorClass)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'setIteratorClass', array('iteratorClass' => $iteratorClass), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->setIteratorClass($iteratorClass);
    }

    /**
     * {@inheritDoc}
     */
    public function getIteratorClass()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'getIteratorClass', array(), $this->initializer56891cc05c10a921572525);

        return $this->valueHolder56891cc05c0ca011782772->getIteratorClass();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc05c10a921572525 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, '__get', array('name' => $name), $this->initializer56891cc05c10a921572525);

        if (isset(self::$publicProperties56891cc05c03b926867178[$name])) {
            return $this->valueHolder56891cc05c0ca011782772->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05c0ca011782772;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc05c0ca011782772;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc05c10a921572525);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05c0ca011782772;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc05c0ca011782772;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, '__isset', array('name' => $name), $this->initializer56891cc05c10a921572525);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05c0ca011782772;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc05c0ca011782772;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, '__unset', array('name' => $name), $this->initializer56891cc05c10a921572525);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05c0ca011782772;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc05c0ca011782772;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, '__clone', array(), $this->initializer56891cc05c10a921572525);

        $this->valueHolder56891cc05c0ca011782772 = clone $this->valueHolder56891cc05c0ca011782772;
    }

    public function __sleep()
    {
        $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, '__sleep', array(), $this->initializer56891cc05c10a921572525);

        return array('valueHolder56891cc05c0ca011782772');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc05c10a921572525 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc05c10a921572525;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc05c10a921572525 && $this->initializer56891cc05c10a921572525->__invoke($this->valueHolder56891cc05c0ca011782772, $this, 'initializeProxy', array(), $this->initializer56891cc05c10a921572525);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc05c0ca011782772;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc05c0ca011782772;
    }


}

class DunglasApiBundleModelDataProviderChain_000000001286031e00000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Model\DataProviderChain implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc05f2da410088184 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc05f3d5329693917 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc05f22a054668453 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getItem(\Dunglas\ApiBundle\Api\ResourceInterface $resource, $id, $fetchData = false)
    {
        $this->initializer56891cc05f3d5329693917 && $this->initializer56891cc05f3d5329693917->__invoke($this->valueHolder56891cc05f2da410088184, $this, 'getItem', array('resource' => $resource, 'id' => $id, 'fetchData' => $fetchData), $this->initializer56891cc05f3d5329693917);

        return $this->valueHolder56891cc05f2da410088184->getItem($resource, $id, $fetchData);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollection(\Dunglas\ApiBundle\Api\ResourceInterface $resource, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer56891cc05f3d5329693917 && $this->initializer56891cc05f3d5329693917->__invoke($this->valueHolder56891cc05f2da410088184, $this, 'getCollection', array('resource' => $resource, 'request' => $request), $this->initializer56891cc05f3d5329693917);

        return $this->valueHolder56891cc05f2da410088184->getCollection($resource, $request);
    }

    /**
     * {@inheritDoc}
     */
    public function supports(\Dunglas\ApiBundle\Api\ResourceInterface $resource)
    {
        $this->initializer56891cc05f3d5329693917 && $this->initializer56891cc05f3d5329693917->__invoke($this->valueHolder56891cc05f2da410088184, $this, 'supports', array('resource' => $resource), $this->initializer56891cc05f3d5329693917);

        return $this->valueHolder56891cc05f2da410088184->supports($resource);
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc05f3d5329693917 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc05f3d5329693917 && $this->initializer56891cc05f3d5329693917->__invoke($this->valueHolder56891cc05f2da410088184, $this, '__get', array('name' => $name), $this->initializer56891cc05f3d5329693917);

        if (isset(self::$publicProperties56891cc05f22a054668453[$name])) {
            return $this->valueHolder56891cc05f2da410088184->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05f2da410088184;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc05f2da410088184;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc05f3d5329693917 && $this->initializer56891cc05f3d5329693917->__invoke($this->valueHolder56891cc05f2da410088184, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc05f3d5329693917);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05f2da410088184;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc05f2da410088184;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc05f3d5329693917 && $this->initializer56891cc05f3d5329693917->__invoke($this->valueHolder56891cc05f2da410088184, $this, '__isset', array('name' => $name), $this->initializer56891cc05f3d5329693917);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05f2da410088184;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc05f2da410088184;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc05f3d5329693917 && $this->initializer56891cc05f3d5329693917->__invoke($this->valueHolder56891cc05f2da410088184, $this, '__unset', array('name' => $name), $this->initializer56891cc05f3d5329693917);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc05f2da410088184;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc05f2da410088184;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc05f3d5329693917 && $this->initializer56891cc05f3d5329693917->__invoke($this->valueHolder56891cc05f2da410088184, $this, '__clone', array(), $this->initializer56891cc05f3d5329693917);

        $this->valueHolder56891cc05f2da410088184 = clone $this->valueHolder56891cc05f2da410088184;
    }

    public function __sleep()
    {
        $this->initializer56891cc05f3d5329693917 && $this->initializer56891cc05f3d5329693917->__invoke($this->valueHolder56891cc05f2da410088184, $this, '__sleep', array(), $this->initializer56891cc05f3d5329693917);

        return array('valueHolder56891cc05f2da410088184');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc05f3d5329693917 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc05f3d5329693917;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc05f3d5329693917 && $this->initializer56891cc05f3d5329693917->__invoke($this->valueHolder56891cc05f2da410088184, $this, 'initializeProxy', array(), $this->initializer56891cc05f3d5329693917);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc05f2da410088184;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc05f2da410088184;
    }


}

class DunglasApiBundleJsonLdEntrypointBuilder_00000000128603ca00000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\JsonLd\EntrypointBuilder implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc06146d587004174 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc061490242759026 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc06140a571221737 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getEntrypoint()
    {
        $this->initializer56891cc061490242759026 && $this->initializer56891cc061490242759026->__invoke($this->valueHolder56891cc06146d587004174, $this, 'getEntrypoint', array(), $this->initializer56891cc061490242759026);

        return $this->valueHolder56891cc06146d587004174->getEntrypoint();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc061490242759026 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc061490242759026 && $this->initializer56891cc061490242759026->__invoke($this->valueHolder56891cc06146d587004174, $this, '__get', array('name' => $name), $this->initializer56891cc061490242759026);

        if (isset(self::$publicProperties56891cc06140a571221737[$name])) {
            return $this->valueHolder56891cc06146d587004174->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06146d587004174;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06146d587004174;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc061490242759026 && $this->initializer56891cc061490242759026->__invoke($this->valueHolder56891cc06146d587004174, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc061490242759026);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06146d587004174;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06146d587004174;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc061490242759026 && $this->initializer56891cc061490242759026->__invoke($this->valueHolder56891cc06146d587004174, $this, '__isset', array('name' => $name), $this->initializer56891cc061490242759026);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06146d587004174;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06146d587004174;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc061490242759026 && $this->initializer56891cc061490242759026->__invoke($this->valueHolder56891cc06146d587004174, $this, '__unset', array('name' => $name), $this->initializer56891cc061490242759026);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06146d587004174;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06146d587004174;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc061490242759026 && $this->initializer56891cc061490242759026->__invoke($this->valueHolder56891cc06146d587004174, $this, '__clone', array(), $this->initializer56891cc061490242759026);

        $this->valueHolder56891cc06146d587004174 = clone $this->valueHolder56891cc06146d587004174;
    }

    public function __sleep()
    {
        $this->initializer56891cc061490242759026 && $this->initializer56891cc061490242759026->__invoke($this->valueHolder56891cc06146d587004174, $this, '__sleep', array(), $this->initializer56891cc061490242759026);

        return array('valueHolder56891cc06146d587004174');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc061490242759026 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc061490242759026;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc061490242759026 && $this->initializer56891cc061490242759026->__invoke($this->valueHolder56891cc06146d587004174, $this, 'initializeProxy', array(), $this->initializer56891cc061490242759026);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc06146d587004174;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc06146d587004174;
    }


}

class DunglasApiBundleHydraSerializerConstraintViolationListNormalizer_00000000128603f300000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Hydra\Serializer\ConstraintViolationListNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc062064651203086 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc062084292242811 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc062021465710982 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $this->initializer56891cc062084292242811 && $this->initializer56891cc062084292242811->__invoke($this->valueHolder56891cc062064651203086, $this, 'normalize', array('object' => $object, 'format' => $format, 'context' => $context), $this->initializer56891cc062084292242811);

        return $this->valueHolder56891cc062064651203086->normalize($object, $format, $context);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        $this->initializer56891cc062084292242811 && $this->initializer56891cc062084292242811->__invoke($this->valueHolder56891cc062064651203086, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer56891cc062084292242811);

        return $this->valueHolder56891cc062064651203086->supportsNormalization($data, $format);
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc062084292242811 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc062084292242811 && $this->initializer56891cc062084292242811->__invoke($this->valueHolder56891cc062064651203086, $this, '__get', array('name' => $name), $this->initializer56891cc062084292242811);

        if (isset(self::$publicProperties56891cc062021465710982[$name])) {
            return $this->valueHolder56891cc062064651203086->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc062064651203086;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc062064651203086;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc062084292242811 && $this->initializer56891cc062084292242811->__invoke($this->valueHolder56891cc062064651203086, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc062084292242811);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc062064651203086;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc062064651203086;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc062084292242811 && $this->initializer56891cc062084292242811->__invoke($this->valueHolder56891cc062064651203086, $this, '__isset', array('name' => $name), $this->initializer56891cc062084292242811);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc062064651203086;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc062064651203086;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc062084292242811 && $this->initializer56891cc062084292242811->__invoke($this->valueHolder56891cc062064651203086, $this, '__unset', array('name' => $name), $this->initializer56891cc062084292242811);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc062064651203086;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc062064651203086;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc062084292242811 && $this->initializer56891cc062084292242811->__invoke($this->valueHolder56891cc062064651203086, $this, '__clone', array(), $this->initializer56891cc062084292242811);

        $this->valueHolder56891cc062064651203086 = clone $this->valueHolder56891cc062064651203086;
    }

    public function __sleep()
    {
        $this->initializer56891cc062084292242811 && $this->initializer56891cc062084292242811->__invoke($this->valueHolder56891cc062064651203086, $this, '__sleep', array(), $this->initializer56891cc062084292242811);

        return array('valueHolder56891cc062064651203086');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc062084292242811 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc062084292242811;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc062084292242811 && $this->initializer56891cc062084292242811->__invoke($this->valueHolder56891cc062064651203086, $this, 'initializeProxy', array(), $this->initializer56891cc062084292242811);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc062064651203086;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc062064651203086;
    }


}

class DunglasApiBundleHydraSerializerErrorNormalizer_00000000128603f200000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Hydra\Serializer\ErrorNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc063421677596981 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc063442621348689 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc0633db761194649 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $this->initializer56891cc063442621348689 && $this->initializer56891cc063442621348689->__invoke($this->valueHolder56891cc063421677596981, $this, 'normalize', array('object' => $object, 'format' => $format, 'context' => $context), $this->initializer56891cc063442621348689);

        return $this->valueHolder56891cc063421677596981->normalize($object, $format, $context);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        $this->initializer56891cc063442621348689 && $this->initializer56891cc063442621348689->__invoke($this->valueHolder56891cc063421677596981, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer56891cc063442621348689);

        return $this->valueHolder56891cc063421677596981->supportsNormalization($data, $format);
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc063442621348689 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc063442621348689 && $this->initializer56891cc063442621348689->__invoke($this->valueHolder56891cc063421677596981, $this, '__get', array('name' => $name), $this->initializer56891cc063442621348689);

        if (isset(self::$publicProperties56891cc0633db761194649[$name])) {
            return $this->valueHolder56891cc063421677596981->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc063421677596981;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc063421677596981;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc063442621348689 && $this->initializer56891cc063442621348689->__invoke($this->valueHolder56891cc063421677596981, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc063442621348689);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc063421677596981;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc063421677596981;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc063442621348689 && $this->initializer56891cc063442621348689->__invoke($this->valueHolder56891cc063421677596981, $this, '__isset', array('name' => $name), $this->initializer56891cc063442621348689);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc063421677596981;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc063421677596981;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc063442621348689 && $this->initializer56891cc063442621348689->__invoke($this->valueHolder56891cc063421677596981, $this, '__unset', array('name' => $name), $this->initializer56891cc063442621348689);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc063421677596981;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc063421677596981;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc063442621348689 && $this->initializer56891cc063442621348689->__invoke($this->valueHolder56891cc063421677596981, $this, '__clone', array(), $this->initializer56891cc063442621348689);

        $this->valueHolder56891cc063421677596981 = clone $this->valueHolder56891cc063421677596981;
    }

    public function __sleep()
    {
        $this->initializer56891cc063442621348689 && $this->initializer56891cc063442621348689->__invoke($this->valueHolder56891cc063421677596981, $this, '__sleep', array(), $this->initializer56891cc063442621348689);

        return array('valueHolder56891cc063421677596981');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc063442621348689 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc063442621348689;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc063442621348689 && $this->initializer56891cc063442621348689->__invoke($this->valueHolder56891cc063421677596981, $this, 'initializeProxy', array(), $this->initializer56891cc063442621348689);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc063421677596981;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc063421677596981;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861fdb00000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc0646f3372134838 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc064715060806588 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc0646ae297611775 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc064715060806588 && $this->initializer56891cc064715060806588->__invoke($this->valueHolder56891cc0646f3372134838, $this, 'getRoute', array(), $this->initializer56891cc064715060806588);

        return $this->valueHolder56891cc0646f3372134838->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc064715060806588 && $this->initializer56891cc064715060806588->__invoke($this->valueHolder56891cc0646f3372134838, $this, 'getRouteName', array(), $this->initializer56891cc064715060806588);

        return $this->valueHolder56891cc0646f3372134838->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc064715060806588 && $this->initializer56891cc064715060806588->__invoke($this->valueHolder56891cc0646f3372134838, $this, 'getContext', array(), $this->initializer56891cc064715060806588);

        return $this->valueHolder56891cc0646f3372134838->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc064715060806588 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc064715060806588 && $this->initializer56891cc064715060806588->__invoke($this->valueHolder56891cc0646f3372134838, $this, '__get', array('name' => $name), $this->initializer56891cc064715060806588);

        if (isset(self::$publicProperties56891cc0646ae297611775[$name])) {
            return $this->valueHolder56891cc0646f3372134838->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0646f3372134838;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc0646f3372134838;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc064715060806588 && $this->initializer56891cc064715060806588->__invoke($this->valueHolder56891cc0646f3372134838, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc064715060806588);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0646f3372134838;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc0646f3372134838;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc064715060806588 && $this->initializer56891cc064715060806588->__invoke($this->valueHolder56891cc0646f3372134838, $this, '__isset', array('name' => $name), $this->initializer56891cc064715060806588);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0646f3372134838;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc0646f3372134838;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc064715060806588 && $this->initializer56891cc064715060806588->__invoke($this->valueHolder56891cc0646f3372134838, $this, '__unset', array('name' => $name), $this->initializer56891cc064715060806588);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0646f3372134838;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc0646f3372134838;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc064715060806588 && $this->initializer56891cc064715060806588->__invoke($this->valueHolder56891cc0646f3372134838, $this, '__clone', array(), $this->initializer56891cc064715060806588);

        $this->valueHolder56891cc0646f3372134838 = clone $this->valueHolder56891cc0646f3372134838;
    }

    public function __sleep()
    {
        $this->initializer56891cc064715060806588 && $this->initializer56891cc064715060806588->__invoke($this->valueHolder56891cc0646f3372134838, $this, '__sleep', array(), $this->initializer56891cc064715060806588);

        return array('valueHolder56891cc0646f3372134838');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc064715060806588 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc064715060806588;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc064715060806588 && $this->initializer56891cc064715060806588->__invoke($this->valueHolder56891cc0646f3372134838, $this, 'initializeProxy', array(), $this->initializer56891cc064715060806588);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc0646f3372134838;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc0646f3372134838;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861fdf00000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc06619e503250421 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc0661c4265818159 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc06614e523716810 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc0661c4265818159 && $this->initializer56891cc0661c4265818159->__invoke($this->valueHolder56891cc06619e503250421, $this, 'getRoute', array(), $this->initializer56891cc0661c4265818159);

        return $this->valueHolder56891cc06619e503250421->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc0661c4265818159 && $this->initializer56891cc0661c4265818159->__invoke($this->valueHolder56891cc06619e503250421, $this, 'getRouteName', array(), $this->initializer56891cc0661c4265818159);

        return $this->valueHolder56891cc06619e503250421->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc0661c4265818159 && $this->initializer56891cc0661c4265818159->__invoke($this->valueHolder56891cc06619e503250421, $this, 'getContext', array(), $this->initializer56891cc0661c4265818159);

        return $this->valueHolder56891cc06619e503250421->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc0661c4265818159 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc0661c4265818159 && $this->initializer56891cc0661c4265818159->__invoke($this->valueHolder56891cc06619e503250421, $this, '__get', array('name' => $name), $this->initializer56891cc0661c4265818159);

        if (isset(self::$publicProperties56891cc06614e523716810[$name])) {
            return $this->valueHolder56891cc06619e503250421->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06619e503250421;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06619e503250421;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc0661c4265818159 && $this->initializer56891cc0661c4265818159->__invoke($this->valueHolder56891cc06619e503250421, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc0661c4265818159);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06619e503250421;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06619e503250421;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc0661c4265818159 && $this->initializer56891cc0661c4265818159->__invoke($this->valueHolder56891cc06619e503250421, $this, '__isset', array('name' => $name), $this->initializer56891cc0661c4265818159);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06619e503250421;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06619e503250421;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc0661c4265818159 && $this->initializer56891cc0661c4265818159->__invoke($this->valueHolder56891cc06619e503250421, $this, '__unset', array('name' => $name), $this->initializer56891cc0661c4265818159);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06619e503250421;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06619e503250421;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc0661c4265818159 && $this->initializer56891cc0661c4265818159->__invoke($this->valueHolder56891cc06619e503250421, $this, '__clone', array(), $this->initializer56891cc0661c4265818159);

        $this->valueHolder56891cc06619e503250421 = clone $this->valueHolder56891cc06619e503250421;
    }

    public function __sleep()
    {
        $this->initializer56891cc0661c4265818159 && $this->initializer56891cc0661c4265818159->__invoke($this->valueHolder56891cc06619e503250421, $this, '__sleep', array(), $this->initializer56891cc0661c4265818159);

        return array('valueHolder56891cc06619e503250421');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc0661c4265818159 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc0661c4265818159;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc0661c4265818159 && $this->initializer56891cc0661c4265818159->__invoke($this->valueHolder56891cc06619e503250421, $this, 'initializeProxy', array(), $this->initializer56891cc0661c4265818159);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc06619e503250421;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc06619e503250421;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861fd300000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc0674e8053811248 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc067518671838212 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc067484521538116 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc067518671838212 && $this->initializer56891cc067518671838212->__invoke($this->valueHolder56891cc0674e8053811248, $this, 'getRoute', array(), $this->initializer56891cc067518671838212);

        return $this->valueHolder56891cc0674e8053811248->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc067518671838212 && $this->initializer56891cc067518671838212->__invoke($this->valueHolder56891cc0674e8053811248, $this, 'getRouteName', array(), $this->initializer56891cc067518671838212);

        return $this->valueHolder56891cc0674e8053811248->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc067518671838212 && $this->initializer56891cc067518671838212->__invoke($this->valueHolder56891cc0674e8053811248, $this, 'getContext', array(), $this->initializer56891cc067518671838212);

        return $this->valueHolder56891cc0674e8053811248->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc067518671838212 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc067518671838212 && $this->initializer56891cc067518671838212->__invoke($this->valueHolder56891cc0674e8053811248, $this, '__get', array('name' => $name), $this->initializer56891cc067518671838212);

        if (isset(self::$publicProperties56891cc067484521538116[$name])) {
            return $this->valueHolder56891cc0674e8053811248->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0674e8053811248;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc0674e8053811248;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc067518671838212 && $this->initializer56891cc067518671838212->__invoke($this->valueHolder56891cc0674e8053811248, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc067518671838212);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0674e8053811248;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc0674e8053811248;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc067518671838212 && $this->initializer56891cc067518671838212->__invoke($this->valueHolder56891cc0674e8053811248, $this, '__isset', array('name' => $name), $this->initializer56891cc067518671838212);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0674e8053811248;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc0674e8053811248;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc067518671838212 && $this->initializer56891cc067518671838212->__invoke($this->valueHolder56891cc0674e8053811248, $this, '__unset', array('name' => $name), $this->initializer56891cc067518671838212);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0674e8053811248;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc0674e8053811248;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc067518671838212 && $this->initializer56891cc067518671838212->__invoke($this->valueHolder56891cc0674e8053811248, $this, '__clone', array(), $this->initializer56891cc067518671838212);

        $this->valueHolder56891cc0674e8053811248 = clone $this->valueHolder56891cc0674e8053811248;
    }

    public function __sleep()
    {
        $this->initializer56891cc067518671838212 && $this->initializer56891cc067518671838212->__invoke($this->valueHolder56891cc0674e8053811248, $this, '__sleep', array(), $this->initializer56891cc067518671838212);

        return array('valueHolder56891cc0674e8053811248');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc067518671838212 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc067518671838212;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc067518671838212 && $this->initializer56891cc067518671838212->__invoke($this->valueHolder56891cc0674e8053811248, $this, 'initializeProxy', array(), $this->initializer56891cc067518671838212);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc0674e8053811248;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc0674e8053811248;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861fd700000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc06ad0b680028686 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc06ad3b849886563 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc06acb2504562530 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc06ad3b849886563 && $this->initializer56891cc06ad3b849886563->__invoke($this->valueHolder56891cc06ad0b680028686, $this, 'getRoute', array(), $this->initializer56891cc06ad3b849886563);

        return $this->valueHolder56891cc06ad0b680028686->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc06ad3b849886563 && $this->initializer56891cc06ad3b849886563->__invoke($this->valueHolder56891cc06ad0b680028686, $this, 'getRouteName', array(), $this->initializer56891cc06ad3b849886563);

        return $this->valueHolder56891cc06ad0b680028686->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc06ad3b849886563 && $this->initializer56891cc06ad3b849886563->__invoke($this->valueHolder56891cc06ad0b680028686, $this, 'getContext', array(), $this->initializer56891cc06ad3b849886563);

        return $this->valueHolder56891cc06ad0b680028686->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc06ad3b849886563 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc06ad3b849886563 && $this->initializer56891cc06ad3b849886563->__invoke($this->valueHolder56891cc06ad0b680028686, $this, '__get', array('name' => $name), $this->initializer56891cc06ad3b849886563);

        if (isset(self::$publicProperties56891cc06acb2504562530[$name])) {
            return $this->valueHolder56891cc06ad0b680028686->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ad0b680028686;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ad0b680028686;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc06ad3b849886563 && $this->initializer56891cc06ad3b849886563->__invoke($this->valueHolder56891cc06ad0b680028686, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc06ad3b849886563);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ad0b680028686;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ad0b680028686;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc06ad3b849886563 && $this->initializer56891cc06ad3b849886563->__invoke($this->valueHolder56891cc06ad0b680028686, $this, '__isset', array('name' => $name), $this->initializer56891cc06ad3b849886563);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ad0b680028686;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ad0b680028686;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc06ad3b849886563 && $this->initializer56891cc06ad3b849886563->__invoke($this->valueHolder56891cc06ad0b680028686, $this, '__unset', array('name' => $name), $this->initializer56891cc06ad3b849886563);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ad0b680028686;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ad0b680028686;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc06ad3b849886563 && $this->initializer56891cc06ad3b849886563->__invoke($this->valueHolder56891cc06ad0b680028686, $this, '__clone', array(), $this->initializer56891cc06ad3b849886563);

        $this->valueHolder56891cc06ad0b680028686 = clone $this->valueHolder56891cc06ad0b680028686;
    }

    public function __sleep()
    {
        $this->initializer56891cc06ad3b849886563 && $this->initializer56891cc06ad3b849886563->__invoke($this->valueHolder56891cc06ad0b680028686, $this, '__sleep', array(), $this->initializer56891cc06ad3b849886563);

        return array('valueHolder56891cc06ad0b680028686');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc06ad3b849886563 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc06ad3b849886563;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc06ad3b849886563 && $this->initializer56891cc06ad3b849886563->__invoke($this->valueHolder56891cc06ad0b680028686, $this, 'initializeProxy', array(), $this->initializer56891cc06ad3b849886563);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc06ad0b680028686;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc06ad0b680028686;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861feb00000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc06be02991924915 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc06be24011070845 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc06bdba988203896 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc06be24011070845 && $this->initializer56891cc06be24011070845->__invoke($this->valueHolder56891cc06be02991924915, $this, 'getRoute', array(), $this->initializer56891cc06be24011070845);

        return $this->valueHolder56891cc06be02991924915->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc06be24011070845 && $this->initializer56891cc06be24011070845->__invoke($this->valueHolder56891cc06be02991924915, $this, 'getRouteName', array(), $this->initializer56891cc06be24011070845);

        return $this->valueHolder56891cc06be02991924915->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc06be24011070845 && $this->initializer56891cc06be24011070845->__invoke($this->valueHolder56891cc06be02991924915, $this, 'getContext', array(), $this->initializer56891cc06be24011070845);

        return $this->valueHolder56891cc06be02991924915->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc06be24011070845 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc06be24011070845 && $this->initializer56891cc06be24011070845->__invoke($this->valueHolder56891cc06be02991924915, $this, '__get', array('name' => $name), $this->initializer56891cc06be24011070845);

        if (isset(self::$publicProperties56891cc06bdba988203896[$name])) {
            return $this->valueHolder56891cc06be02991924915->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06be02991924915;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06be02991924915;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc06be24011070845 && $this->initializer56891cc06be24011070845->__invoke($this->valueHolder56891cc06be02991924915, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc06be24011070845);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06be02991924915;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06be02991924915;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc06be24011070845 && $this->initializer56891cc06be24011070845->__invoke($this->valueHolder56891cc06be02991924915, $this, '__isset', array('name' => $name), $this->initializer56891cc06be24011070845);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06be02991924915;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06be02991924915;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc06be24011070845 && $this->initializer56891cc06be24011070845->__invoke($this->valueHolder56891cc06be02991924915, $this, '__unset', array('name' => $name), $this->initializer56891cc06be24011070845);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06be02991924915;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06be02991924915;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc06be24011070845 && $this->initializer56891cc06be24011070845->__invoke($this->valueHolder56891cc06be02991924915, $this, '__clone', array(), $this->initializer56891cc06be24011070845);

        $this->valueHolder56891cc06be02991924915 = clone $this->valueHolder56891cc06be02991924915;
    }

    public function __sleep()
    {
        $this->initializer56891cc06be24011070845 && $this->initializer56891cc06be24011070845->__invoke($this->valueHolder56891cc06be02991924915, $this, '__sleep', array(), $this->initializer56891cc06be24011070845);

        return array('valueHolder56891cc06be02991924915');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc06be24011070845 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc06be24011070845;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc06be24011070845 && $this->initializer56891cc06be24011070845->__invoke($this->valueHolder56891cc06be02991924915, $this, 'initializeProxy', array(), $this->initializer56891cc06be24011070845);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc06be02991924915;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc06be02991924915;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861fec00000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc06ce81907195348 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc06cea6144868475 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc06ce30320844326 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc06cea6144868475 && $this->initializer56891cc06cea6144868475->__invoke($this->valueHolder56891cc06ce81907195348, $this, 'getRoute', array(), $this->initializer56891cc06cea6144868475);

        return $this->valueHolder56891cc06ce81907195348->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc06cea6144868475 && $this->initializer56891cc06cea6144868475->__invoke($this->valueHolder56891cc06ce81907195348, $this, 'getRouteName', array(), $this->initializer56891cc06cea6144868475);

        return $this->valueHolder56891cc06ce81907195348->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc06cea6144868475 && $this->initializer56891cc06cea6144868475->__invoke($this->valueHolder56891cc06ce81907195348, $this, 'getContext', array(), $this->initializer56891cc06cea6144868475);

        return $this->valueHolder56891cc06ce81907195348->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc06cea6144868475 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc06cea6144868475 && $this->initializer56891cc06cea6144868475->__invoke($this->valueHolder56891cc06ce81907195348, $this, '__get', array('name' => $name), $this->initializer56891cc06cea6144868475);

        if (isset(self::$publicProperties56891cc06ce30320844326[$name])) {
            return $this->valueHolder56891cc06ce81907195348->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ce81907195348;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ce81907195348;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc06cea6144868475 && $this->initializer56891cc06cea6144868475->__invoke($this->valueHolder56891cc06ce81907195348, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc06cea6144868475);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ce81907195348;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ce81907195348;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc06cea6144868475 && $this->initializer56891cc06cea6144868475->__invoke($this->valueHolder56891cc06ce81907195348, $this, '__isset', array('name' => $name), $this->initializer56891cc06cea6144868475);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ce81907195348;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ce81907195348;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc06cea6144868475 && $this->initializer56891cc06cea6144868475->__invoke($this->valueHolder56891cc06ce81907195348, $this, '__unset', array('name' => $name), $this->initializer56891cc06cea6144868475);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ce81907195348;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ce81907195348;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc06cea6144868475 && $this->initializer56891cc06cea6144868475->__invoke($this->valueHolder56891cc06ce81907195348, $this, '__clone', array(), $this->initializer56891cc06cea6144868475);

        $this->valueHolder56891cc06ce81907195348 = clone $this->valueHolder56891cc06ce81907195348;
    }

    public function __sleep()
    {
        $this->initializer56891cc06cea6144868475 && $this->initializer56891cc06cea6144868475->__invoke($this->valueHolder56891cc06ce81907195348, $this, '__sleep', array(), $this->initializer56891cc06cea6144868475);

        return array('valueHolder56891cc06ce81907195348');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc06cea6144868475 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc06cea6144868475;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc06cea6144868475 && $this->initializer56891cc06cea6144868475->__invoke($this->valueHolder56891cc06ce81907195348, $this, 'initializeProxy', array(), $this->initializer56891cc06cea6144868475);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc06ce81907195348;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc06ce81907195348;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861fe000000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc06dc1d051791572 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc06dc3c737097693 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc06dbdc760869249 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc06dc3c737097693 && $this->initializer56891cc06dc3c737097693->__invoke($this->valueHolder56891cc06dc1d051791572, $this, 'getRoute', array(), $this->initializer56891cc06dc3c737097693);

        return $this->valueHolder56891cc06dc1d051791572->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc06dc3c737097693 && $this->initializer56891cc06dc3c737097693->__invoke($this->valueHolder56891cc06dc1d051791572, $this, 'getRouteName', array(), $this->initializer56891cc06dc3c737097693);

        return $this->valueHolder56891cc06dc1d051791572->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc06dc3c737097693 && $this->initializer56891cc06dc3c737097693->__invoke($this->valueHolder56891cc06dc1d051791572, $this, 'getContext', array(), $this->initializer56891cc06dc3c737097693);

        return $this->valueHolder56891cc06dc1d051791572->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc06dc3c737097693 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc06dc3c737097693 && $this->initializer56891cc06dc3c737097693->__invoke($this->valueHolder56891cc06dc1d051791572, $this, '__get', array('name' => $name), $this->initializer56891cc06dc3c737097693);

        if (isset(self::$publicProperties56891cc06dbdc760869249[$name])) {
            return $this->valueHolder56891cc06dc1d051791572->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06dc1d051791572;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06dc1d051791572;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc06dc3c737097693 && $this->initializer56891cc06dc3c737097693->__invoke($this->valueHolder56891cc06dc1d051791572, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc06dc3c737097693);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06dc1d051791572;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06dc1d051791572;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc06dc3c737097693 && $this->initializer56891cc06dc3c737097693->__invoke($this->valueHolder56891cc06dc1d051791572, $this, '__isset', array('name' => $name), $this->initializer56891cc06dc3c737097693);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06dc1d051791572;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06dc1d051791572;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc06dc3c737097693 && $this->initializer56891cc06dc3c737097693->__invoke($this->valueHolder56891cc06dc1d051791572, $this, '__unset', array('name' => $name), $this->initializer56891cc06dc3c737097693);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06dc1d051791572;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06dc1d051791572;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc06dc3c737097693 && $this->initializer56891cc06dc3c737097693->__invoke($this->valueHolder56891cc06dc1d051791572, $this, '__clone', array(), $this->initializer56891cc06dc3c737097693);

        $this->valueHolder56891cc06dc1d051791572 = clone $this->valueHolder56891cc06dc1d051791572;
    }

    public function __sleep()
    {
        $this->initializer56891cc06dc3c737097693 && $this->initializer56891cc06dc3c737097693->__invoke($this->valueHolder56891cc06dc1d051791572, $this, '__sleep', array(), $this->initializer56891cc06dc3c737097693);

        return array('valueHolder56891cc06dc1d051791572');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc06dc3c737097693 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc06dc3c737097693;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc06dc3c737097693 && $this->initializer56891cc06dc3c737097693->__invoke($this->valueHolder56891cc06dc1d051791572, $this, 'initializeProxy', array(), $this->initializer56891cc06dc3c737097693);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc06dc1d051791572;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc06dc1d051791572;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861fe400000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc06ea69989109288 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc06ea89982625801 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc06ea27989810598 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc06ea89982625801 && $this->initializer56891cc06ea89982625801->__invoke($this->valueHolder56891cc06ea69989109288, $this, 'getRoute', array(), $this->initializer56891cc06ea89982625801);

        return $this->valueHolder56891cc06ea69989109288->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc06ea89982625801 && $this->initializer56891cc06ea89982625801->__invoke($this->valueHolder56891cc06ea69989109288, $this, 'getRouteName', array(), $this->initializer56891cc06ea89982625801);

        return $this->valueHolder56891cc06ea69989109288->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc06ea89982625801 && $this->initializer56891cc06ea89982625801->__invoke($this->valueHolder56891cc06ea69989109288, $this, 'getContext', array(), $this->initializer56891cc06ea89982625801);

        return $this->valueHolder56891cc06ea69989109288->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc06ea89982625801 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc06ea89982625801 && $this->initializer56891cc06ea89982625801->__invoke($this->valueHolder56891cc06ea69989109288, $this, '__get', array('name' => $name), $this->initializer56891cc06ea89982625801);

        if (isset(self::$publicProperties56891cc06ea27989810598[$name])) {
            return $this->valueHolder56891cc06ea69989109288->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ea69989109288;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ea69989109288;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc06ea89982625801 && $this->initializer56891cc06ea89982625801->__invoke($this->valueHolder56891cc06ea69989109288, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc06ea89982625801);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ea69989109288;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ea69989109288;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc06ea89982625801 && $this->initializer56891cc06ea89982625801->__invoke($this->valueHolder56891cc06ea69989109288, $this, '__isset', array('name' => $name), $this->initializer56891cc06ea89982625801);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ea69989109288;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ea69989109288;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc06ea89982625801 && $this->initializer56891cc06ea89982625801->__invoke($this->valueHolder56891cc06ea69989109288, $this, '__unset', array('name' => $name), $this->initializer56891cc06ea89982625801);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06ea69989109288;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06ea69989109288;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc06ea89982625801 && $this->initializer56891cc06ea89982625801->__invoke($this->valueHolder56891cc06ea69989109288, $this, '__clone', array(), $this->initializer56891cc06ea89982625801);

        $this->valueHolder56891cc06ea69989109288 = clone $this->valueHolder56891cc06ea69989109288;
    }

    public function __sleep()
    {
        $this->initializer56891cc06ea89982625801 && $this->initializer56891cc06ea89982625801->__invoke($this->valueHolder56891cc06ea69989109288, $this, '__sleep', array(), $this->initializer56891cc06ea89982625801);

        return array('valueHolder56891cc06ea69989109288');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc06ea89982625801 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc06ea89982625801;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc06ea89982625801 && $this->initializer56891cc06ea89982625801->__invoke($this->valueHolder56891cc06ea69989109288, $this, 'initializeProxy', array(), $this->initializer56891cc06ea89982625801);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc06ea69989109288;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc06ea69989109288;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861ff800000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc06f877421494976 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc06f896661701639 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc06f835765868767 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc06f896661701639 && $this->initializer56891cc06f896661701639->__invoke($this->valueHolder56891cc06f877421494976, $this, 'getRoute', array(), $this->initializer56891cc06f896661701639);

        return $this->valueHolder56891cc06f877421494976->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc06f896661701639 && $this->initializer56891cc06f896661701639->__invoke($this->valueHolder56891cc06f877421494976, $this, 'getRouteName', array(), $this->initializer56891cc06f896661701639);

        return $this->valueHolder56891cc06f877421494976->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc06f896661701639 && $this->initializer56891cc06f896661701639->__invoke($this->valueHolder56891cc06f877421494976, $this, 'getContext', array(), $this->initializer56891cc06f896661701639);

        return $this->valueHolder56891cc06f877421494976->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc06f896661701639 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc06f896661701639 && $this->initializer56891cc06f896661701639->__invoke($this->valueHolder56891cc06f877421494976, $this, '__get', array('name' => $name), $this->initializer56891cc06f896661701639);

        if (isset(self::$publicProperties56891cc06f835765868767[$name])) {
            return $this->valueHolder56891cc06f877421494976->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06f877421494976;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06f877421494976;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc06f896661701639 && $this->initializer56891cc06f896661701639->__invoke($this->valueHolder56891cc06f877421494976, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc06f896661701639);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06f877421494976;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc06f877421494976;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc06f896661701639 && $this->initializer56891cc06f896661701639->__invoke($this->valueHolder56891cc06f877421494976, $this, '__isset', array('name' => $name), $this->initializer56891cc06f896661701639);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06f877421494976;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06f877421494976;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc06f896661701639 && $this->initializer56891cc06f896661701639->__invoke($this->valueHolder56891cc06f877421494976, $this, '__unset', array('name' => $name), $this->initializer56891cc06f896661701639);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc06f877421494976;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc06f877421494976;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc06f896661701639 && $this->initializer56891cc06f896661701639->__invoke($this->valueHolder56891cc06f877421494976, $this, '__clone', array(), $this->initializer56891cc06f896661701639);

        $this->valueHolder56891cc06f877421494976 = clone $this->valueHolder56891cc06f877421494976;
    }

    public function __sleep()
    {
        $this->initializer56891cc06f896661701639 && $this->initializer56891cc06f896661701639->__invoke($this->valueHolder56891cc06f877421494976, $this, '__sleep', array(), $this->initializer56891cc06f896661701639);

        return array('valueHolder56891cc06f877421494976');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc06f896661701639 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc06f896661701639;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc06f896661701639 && $this->initializer56891cc06f896661701639->__invoke($this->valueHolder56891cc06f877421494976, $this, 'initializeProxy', array(), $this->initializer56891cc06f896661701639);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc06f877421494976;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc06f877421494976;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861ffc00000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc0707d4543150610 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc070810916170978 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc070754379964128 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc070810916170978 && $this->initializer56891cc070810916170978->__invoke($this->valueHolder56891cc0707d4543150610, $this, 'getRoute', array(), $this->initializer56891cc070810916170978);

        return $this->valueHolder56891cc0707d4543150610->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc070810916170978 && $this->initializer56891cc070810916170978->__invoke($this->valueHolder56891cc0707d4543150610, $this, 'getRouteName', array(), $this->initializer56891cc070810916170978);

        return $this->valueHolder56891cc0707d4543150610->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc070810916170978 && $this->initializer56891cc070810916170978->__invoke($this->valueHolder56891cc0707d4543150610, $this, 'getContext', array(), $this->initializer56891cc070810916170978);

        return $this->valueHolder56891cc0707d4543150610->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc070810916170978 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc070810916170978 && $this->initializer56891cc070810916170978->__invoke($this->valueHolder56891cc0707d4543150610, $this, '__get', array('name' => $name), $this->initializer56891cc070810916170978);

        if (isset(self::$publicProperties56891cc070754379964128[$name])) {
            return $this->valueHolder56891cc0707d4543150610->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0707d4543150610;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc0707d4543150610;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc070810916170978 && $this->initializer56891cc070810916170978->__invoke($this->valueHolder56891cc0707d4543150610, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc070810916170978);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0707d4543150610;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc0707d4543150610;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc070810916170978 && $this->initializer56891cc070810916170978->__invoke($this->valueHolder56891cc0707d4543150610, $this, '__isset', array('name' => $name), $this->initializer56891cc070810916170978);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0707d4543150610;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc0707d4543150610;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc070810916170978 && $this->initializer56891cc070810916170978->__invoke($this->valueHolder56891cc0707d4543150610, $this, '__unset', array('name' => $name), $this->initializer56891cc070810916170978);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc0707d4543150610;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc0707d4543150610;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc070810916170978 && $this->initializer56891cc070810916170978->__invoke($this->valueHolder56891cc0707d4543150610, $this, '__clone', array(), $this->initializer56891cc070810916170978);

        $this->valueHolder56891cc0707d4543150610 = clone $this->valueHolder56891cc0707d4543150610;
    }

    public function __sleep()
    {
        $this->initializer56891cc070810916170978 && $this->initializer56891cc070810916170978->__invoke($this->valueHolder56891cc0707d4543150610, $this, '__sleep', array(), $this->initializer56891cc070810916170978);

        return array('valueHolder56891cc0707d4543150610');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc070810916170978 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc070810916170978;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc070810916170978 && $this->initializer56891cc070810916170978->__invoke($this->valueHolder56891cc0707d4543150610, $this, 'initializeProxy', array(), $this->initializer56891cc070810916170978);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc0707d4543150610;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc0707d4543150610;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861ff100000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc071e55805450495 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc071e80694457775 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc071df8085415449 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc071e80694457775 && $this->initializer56891cc071e80694457775->__invoke($this->valueHolder56891cc071e55805450495, $this, 'getRoute', array(), $this->initializer56891cc071e80694457775);

        return $this->valueHolder56891cc071e55805450495->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc071e80694457775 && $this->initializer56891cc071e80694457775->__invoke($this->valueHolder56891cc071e55805450495, $this, 'getRouteName', array(), $this->initializer56891cc071e80694457775);

        return $this->valueHolder56891cc071e55805450495->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc071e80694457775 && $this->initializer56891cc071e80694457775->__invoke($this->valueHolder56891cc071e55805450495, $this, 'getContext', array(), $this->initializer56891cc071e80694457775);

        return $this->valueHolder56891cc071e55805450495->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc071e80694457775 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc071e80694457775 && $this->initializer56891cc071e80694457775->__invoke($this->valueHolder56891cc071e55805450495, $this, '__get', array('name' => $name), $this->initializer56891cc071e80694457775);

        if (isset(self::$publicProperties56891cc071df8085415449[$name])) {
            return $this->valueHolder56891cc071e55805450495->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc071e55805450495;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc071e55805450495;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc071e80694457775 && $this->initializer56891cc071e80694457775->__invoke($this->valueHolder56891cc071e55805450495, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc071e80694457775);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc071e55805450495;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc071e55805450495;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc071e80694457775 && $this->initializer56891cc071e80694457775->__invoke($this->valueHolder56891cc071e55805450495, $this, '__isset', array('name' => $name), $this->initializer56891cc071e80694457775);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc071e55805450495;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc071e55805450495;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc071e80694457775 && $this->initializer56891cc071e80694457775->__invoke($this->valueHolder56891cc071e55805450495, $this, '__unset', array('name' => $name), $this->initializer56891cc071e80694457775);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc071e55805450495;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc071e55805450495;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc071e80694457775 && $this->initializer56891cc071e80694457775->__invoke($this->valueHolder56891cc071e55805450495, $this, '__clone', array(), $this->initializer56891cc071e80694457775);

        $this->valueHolder56891cc071e55805450495 = clone $this->valueHolder56891cc071e55805450495;
    }

    public function __sleep()
    {
        $this->initializer56891cc071e80694457775 && $this->initializer56891cc071e80694457775->__invoke($this->valueHolder56891cc071e55805450495, $this, '__sleep', array(), $this->initializer56891cc071e80694457775);

        return array('valueHolder56891cc071e55805450495');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc071e80694457775 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc071e80694457775;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc071e80694457775 && $this->initializer56891cc071e80694457775->__invoke($this->valueHolder56891cc071e55805450495, $this, 'initializeProxy', array(), $this->initializer56891cc071e80694457775);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc071e55805450495;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc071e55805450495;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861ff500000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc073070616456768 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc073095753292115 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc073024926951131 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc073095753292115 && $this->initializer56891cc073095753292115->__invoke($this->valueHolder56891cc073070616456768, $this, 'getRoute', array(), $this->initializer56891cc073095753292115);

        return $this->valueHolder56891cc073070616456768->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc073095753292115 && $this->initializer56891cc073095753292115->__invoke($this->valueHolder56891cc073070616456768, $this, 'getRouteName', array(), $this->initializer56891cc073095753292115);

        return $this->valueHolder56891cc073070616456768->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc073095753292115 && $this->initializer56891cc073095753292115->__invoke($this->valueHolder56891cc073070616456768, $this, 'getContext', array(), $this->initializer56891cc073095753292115);

        return $this->valueHolder56891cc073070616456768->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc073095753292115 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc073095753292115 && $this->initializer56891cc073095753292115->__invoke($this->valueHolder56891cc073070616456768, $this, '__get', array('name' => $name), $this->initializer56891cc073095753292115);

        if (isset(self::$publicProperties56891cc073024926951131[$name])) {
            return $this->valueHolder56891cc073070616456768->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc073070616456768;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc073070616456768;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc073095753292115 && $this->initializer56891cc073095753292115->__invoke($this->valueHolder56891cc073070616456768, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc073095753292115);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc073070616456768;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc073070616456768;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc073095753292115 && $this->initializer56891cc073095753292115->__invoke($this->valueHolder56891cc073070616456768, $this, '__isset', array('name' => $name), $this->initializer56891cc073095753292115);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc073070616456768;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc073070616456768;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc073095753292115 && $this->initializer56891cc073095753292115->__invoke($this->valueHolder56891cc073070616456768, $this, '__unset', array('name' => $name), $this->initializer56891cc073095753292115);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc073070616456768;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc073070616456768;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc073095753292115 && $this->initializer56891cc073095753292115->__invoke($this->valueHolder56891cc073070616456768, $this, '__clone', array(), $this->initializer56891cc073095753292115);

        $this->valueHolder56891cc073070616456768 = clone $this->valueHolder56891cc073070616456768;
    }

    public function __sleep()
    {
        $this->initializer56891cc073095753292115 && $this->initializer56891cc073095753292115->__invoke($this->valueHolder56891cc073070616456768, $this, '__sleep', array(), $this->initializer56891cc073095753292115);

        return array('valueHolder56891cc073070616456768');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc073095753292115 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc073095753292115;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc073095753292115 && $this->initializer56891cc073095753292115->__invoke($this->valueHolder56891cc073070616456768, $this, 'initializeProxy', array(), $this->initializer56891cc073095753292115);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc073070616456768;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc073070616456768;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861f8900000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc073f80806688350 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc073fa0625528666 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc073f40441601984 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc073fa0625528666 && $this->initializer56891cc073fa0625528666->__invoke($this->valueHolder56891cc073f80806688350, $this, 'getRoute', array(), $this->initializer56891cc073fa0625528666);

        return $this->valueHolder56891cc073f80806688350->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc073fa0625528666 && $this->initializer56891cc073fa0625528666->__invoke($this->valueHolder56891cc073f80806688350, $this, 'getRouteName', array(), $this->initializer56891cc073fa0625528666);

        return $this->valueHolder56891cc073f80806688350->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc073fa0625528666 && $this->initializer56891cc073fa0625528666->__invoke($this->valueHolder56891cc073f80806688350, $this, 'getContext', array(), $this->initializer56891cc073fa0625528666);

        return $this->valueHolder56891cc073f80806688350->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc073fa0625528666 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc073fa0625528666 && $this->initializer56891cc073fa0625528666->__invoke($this->valueHolder56891cc073f80806688350, $this, '__get', array('name' => $name), $this->initializer56891cc073fa0625528666);

        if (isset(self::$publicProperties56891cc073f40441601984[$name])) {
            return $this->valueHolder56891cc073f80806688350->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc073f80806688350;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc073f80806688350;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc073fa0625528666 && $this->initializer56891cc073fa0625528666->__invoke($this->valueHolder56891cc073f80806688350, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc073fa0625528666);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc073f80806688350;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc073f80806688350;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc073fa0625528666 && $this->initializer56891cc073fa0625528666->__invoke($this->valueHolder56891cc073f80806688350, $this, '__isset', array('name' => $name), $this->initializer56891cc073fa0625528666);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc073f80806688350;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc073f80806688350;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc073fa0625528666 && $this->initializer56891cc073fa0625528666->__invoke($this->valueHolder56891cc073f80806688350, $this, '__unset', array('name' => $name), $this->initializer56891cc073fa0625528666);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc073f80806688350;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc073f80806688350;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc073fa0625528666 && $this->initializer56891cc073fa0625528666->__invoke($this->valueHolder56891cc073f80806688350, $this, '__clone', array(), $this->initializer56891cc073fa0625528666);

        $this->valueHolder56891cc073f80806688350 = clone $this->valueHolder56891cc073f80806688350;
    }

    public function __sleep()
    {
        $this->initializer56891cc073fa0625528666 && $this->initializer56891cc073fa0625528666->__invoke($this->valueHolder56891cc073f80806688350, $this, '__sleep', array(), $this->initializer56891cc073fa0625528666);

        return array('valueHolder56891cc073f80806688350');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc073fa0625528666 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc073fa0625528666;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc073fa0625528666 && $this->initializer56891cc073fa0625528666->__invoke($this->valueHolder56891cc073f80806688350, $this, 'initializeProxy', array(), $this->initializer56891cc073fa0625528666);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc073f80806688350;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc073f80806688350;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861f8d00000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc074dd1078750532 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc074df1239819478 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc074d90945111433 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc074df1239819478 && $this->initializer56891cc074df1239819478->__invoke($this->valueHolder56891cc074dd1078750532, $this, 'getRoute', array(), $this->initializer56891cc074df1239819478);

        return $this->valueHolder56891cc074dd1078750532->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc074df1239819478 && $this->initializer56891cc074df1239819478->__invoke($this->valueHolder56891cc074dd1078750532, $this, 'getRouteName', array(), $this->initializer56891cc074df1239819478);

        return $this->valueHolder56891cc074dd1078750532->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc074df1239819478 && $this->initializer56891cc074df1239819478->__invoke($this->valueHolder56891cc074dd1078750532, $this, 'getContext', array(), $this->initializer56891cc074df1239819478);

        return $this->valueHolder56891cc074dd1078750532->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc074df1239819478 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc074df1239819478 && $this->initializer56891cc074df1239819478->__invoke($this->valueHolder56891cc074dd1078750532, $this, '__get', array('name' => $name), $this->initializer56891cc074df1239819478);

        if (isset(self::$publicProperties56891cc074d90945111433[$name])) {
            return $this->valueHolder56891cc074dd1078750532->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc074dd1078750532;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc074dd1078750532;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc074df1239819478 && $this->initializer56891cc074df1239819478->__invoke($this->valueHolder56891cc074dd1078750532, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc074df1239819478);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc074dd1078750532;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc074dd1078750532;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc074df1239819478 && $this->initializer56891cc074df1239819478->__invoke($this->valueHolder56891cc074dd1078750532, $this, '__isset', array('name' => $name), $this->initializer56891cc074df1239819478);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc074dd1078750532;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc074dd1078750532;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc074df1239819478 && $this->initializer56891cc074df1239819478->__invoke($this->valueHolder56891cc074dd1078750532, $this, '__unset', array('name' => $name), $this->initializer56891cc074df1239819478);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc074dd1078750532;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc074dd1078750532;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc074df1239819478 && $this->initializer56891cc074df1239819478->__invoke($this->valueHolder56891cc074dd1078750532, $this, '__clone', array(), $this->initializer56891cc074df1239819478);

        $this->valueHolder56891cc074dd1078750532 = clone $this->valueHolder56891cc074dd1078750532;
    }

    public function __sleep()
    {
        $this->initializer56891cc074df1239819478 && $this->initializer56891cc074df1239819478->__invoke($this->valueHolder56891cc074dd1078750532, $this, '__sleep', array(), $this->initializer56891cc074df1239819478);

        return array('valueHolder56891cc074dd1078750532');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc074df1239819478 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc074df1239819478;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc074df1239819478 && $this->initializer56891cc074df1239819478->__invoke($this->valueHolder56891cc074dd1078750532, $this, 'initializeProxy', array(), $this->initializer56891cc074df1239819478);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc074dd1078750532;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc074dd1078750532;
    }


}

class DunglasApiBundleApiOperationOperation_0000000012861f8100000001571256ad21cdc36970661c68ecf61f97f966b596 extends \Dunglas\ApiBundle\Api\Operation\Operation implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder56891cc075b98376183542 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56891cc075bb7255151803 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56891cc075b54145873077 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {
        $this->initializer56891cc075bb7255151803 && $this->initializer56891cc075bb7255151803->__invoke($this->valueHolder56891cc075b98376183542, $this, 'getRoute', array(), $this->initializer56891cc075bb7255151803);

        return $this->valueHolder56891cc075b98376183542->getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {
        $this->initializer56891cc075bb7255151803 && $this->initializer56891cc075bb7255151803->__invoke($this->valueHolder56891cc075b98376183542, $this, 'getRouteName', array(), $this->initializer56891cc075bb7255151803);

        return $this->valueHolder56891cc075b98376183542->getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        $this->initializer56891cc075bb7255151803 && $this->initializer56891cc075bb7255151803->__invoke($this->valueHolder56891cc075b98376183542, $this, 'getContext', array(), $this->initializer56891cc075bb7255151803);

        return $this->valueHolder56891cc075b98376183542->getContext();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer56891cc075bb7255151803 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer56891cc075bb7255151803 && $this->initializer56891cc075bb7255151803->__invoke($this->valueHolder56891cc075b98376183542, $this, '__get', array('name' => $name), $this->initializer56891cc075bb7255151803);

        if (isset(self::$publicProperties56891cc075b54145873077[$name])) {
            return $this->valueHolder56891cc075b98376183542->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc075b98376183542;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder56891cc075b98376183542;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer56891cc075bb7255151803 && $this->initializer56891cc075bb7255151803->__invoke($this->valueHolder56891cc075b98376183542, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56891cc075bb7255151803);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc075b98376183542;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder56891cc075b98376183542;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer56891cc075bb7255151803 && $this->initializer56891cc075bb7255151803->__invoke($this->valueHolder56891cc075b98376183542, $this, '__isset', array('name' => $name), $this->initializer56891cc075bb7255151803);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc075b98376183542;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc075b98376183542;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer56891cc075bb7255151803 && $this->initializer56891cc075bb7255151803->__invoke($this->valueHolder56891cc075b98376183542, $this, '__unset', array('name' => $name), $this->initializer56891cc075bb7255151803);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56891cc075b98376183542;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder56891cc075b98376183542;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer56891cc075bb7255151803 && $this->initializer56891cc075bb7255151803->__invoke($this->valueHolder56891cc075b98376183542, $this, '__clone', array(), $this->initializer56891cc075bb7255151803);

        $this->valueHolder56891cc075b98376183542 = clone $this->valueHolder56891cc075b98376183542;
    }

    public function __sleep()
    {
        $this->initializer56891cc075bb7255151803 && $this->initializer56891cc075bb7255151803->__invoke($this->valueHolder56891cc075b98376183542, $this, '__sleep', array(), $this->initializer56891cc075bb7255151803);

        return array('valueHolder56891cc075b98376183542');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer56891cc075bb7255151803 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer56891cc075bb7255151803;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer56891cc075bb7255151803 && $this->initializer56891cc075bb7255151803->__invoke($this->valueHolder56891cc075b98376183542, $this, 'initializeProxy', array(), $this->initializer56891cc075bb7255151803);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder56891cc075b98376183542;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56891cc075b98376183542;
    }


}
