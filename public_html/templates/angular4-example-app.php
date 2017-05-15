<!--routerLink tells angular to grab a link a load it. (href causes a hard relaod of the browser-->
<p class="pull-right"><em>Hungry for <a routerLink="bacon">bacon</a>?</em></p>
<main class="container">
<!--	'router-outlet' tells angular that, as the user switches from route to route, post the results here-->
<!--	'router-outlet' is similar to "outputArea" in JavaScript. It is an "empty tag".-->
	<router-outlet></router-outlet>
</main>