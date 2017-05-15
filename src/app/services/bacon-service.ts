import {Injectable} from "@angular/core";
import {Http} from "@angular/http";
import {Observable} from "rxjs/Observable";

// inject this into the "baconService" dependency injection site on components/bacon-component.ts
// http is an injectable (AJAX injectable of angular code)
@Injectable()
export class BaconService {
	constructor(protected http: Http) {}

	private baconUrl = "https://baconipsum.com/api/?type=meat-and-filler&paras=";

	// get the Bacon text (x number of paragraphs and make these an observable
	// since the observable is just text, it's simply a string
	getBacon(paragraphs : number) : Observable<string[]> {
		return(this.http.get(this.baconUrl + paragraphs)
			.map(response => response.json()));
	}
}