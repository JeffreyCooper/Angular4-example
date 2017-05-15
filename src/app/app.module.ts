// always load NgModule, BrowserModule
import {NgModule} from "@angular/core";
import {BrowserModule} from "@angular/platform-browser";
// Forms and Http are very useful and almost always included
import {FormsModule} from "@angular/forms";
import {HttpModule} from "@angular/http";
// the following is the app for this project itself
import {AppComponent} from "./app.component";
import {allAppComponents, appRoutingProviders, routing} from "./app.routes";

const moduleDeclarations = [AppComponent];

// "@" is called a "decorator"
@NgModule({
	imports:      [BrowserModule, FormsModule, HttpModule, routing],
	declarations: [...moduleDeclarations, ...allAppComponents],
	bootstrap:    [AppComponent],
	providers:    [appRoutingProviders]
})
export class AppModule {}