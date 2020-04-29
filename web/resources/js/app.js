import ExampleComponent from "./components/ExampleComponent";

Cms.booting((Vue, router) => {
    router.addRoutes([
        {
            path: '/admin/foo',
            name: 'foo.bar',
            component: ExampleComponent
        }
    ]);
});
