import { platformBrowserDynamic } from "@angular/platform-browser-dynamic";
import { AppModule } from "./app/app.module";
// comment out the following line until you go live. then activate it!
// import { enableProdMode } from "@angular/core";

//only use when app is going live effects debugging
// during testing, comment the following line out, then return it to the script when going live
// enableProdMode();
// "bootstrap" below (bootstrapModule) means start Angular from nothing. It's the beginning of running Angular
platformBrowserDynamic().bootstrapModule(AppModule);