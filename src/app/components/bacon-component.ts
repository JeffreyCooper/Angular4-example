import {Component, OnInit} from "@angular/core";
import {BaconService} from "../services/bacon-service";

@Component({
	templateUrl: "./templates/bacon.php"
})

// this is where the active useful part of Angular is injected. Otherwise, it's just a static site.
export class BaconComponent implements OnInit {

	numParagraphs : number = 3;
	paragraphs : string[] = [];

	// this is the dependency injection
	constructor(private baconService: BaconService) {}

	// Angular OnInit method. "getBacon just refers to the next line of code below
	ngOnInit() : void {
		this.getBacon();
	}

	// this tells what bacon will be. (number of paragraphs we want)
	// this is shorthand for an Arrow Function.
	// this code takes the server data in the parameter "paragraphs" and saves it as a state variable
	getBacon() : void {
		this.baconService.getBacon(this.numParagraphs)
			.subscribe(paragraphs => this.paragraphs = paragraphs);
	}

}