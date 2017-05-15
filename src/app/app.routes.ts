import {RouterModule, Routes} from "@angular/router";
// finally, we are inserting our own code!
import {BaconComponent} from "./components/bacon-component";
import {HomeComponent} from "./components/home-component";
import {BaconService} from "./services/bacon-service";

// any time you have a component, you must list it in brackets below
export const allAppComponents = [BaconComponent, HomeComponent];

export const routes: Routes = [
	// in the following, you tell it to 'create a path to foo' and 'use this component for that path'
	{path: "bacon", component: BaconComponent},
	// always include a path for Empty String, this is the default where the user lands
	{path: "", component: HomeComponent}
];

// any time you use a service, you must place it in the brackets below
export const appRoutingProviders: any[] = [BaconService];

// this tells the browser to start loading
export const routing = RouterModule.forRoot(routes);