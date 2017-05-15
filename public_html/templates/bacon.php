<h1>Bacon Component</h1>
<form #baconForm="ngForm" class="form-horizontal" name="baconForm" id="baconForm" novalidate>
<!--	the brackets [] indicate a one-way binding (back to front; vice-versa.-->
<!--	has-error is bootstrap that highlights in red when something is wrong-->
<!--	touched: user clicked on field. -->
	<div class="form-group" [ngClass]="{ 'has-error': baconNumParagraphs.touched && baconNumParagraphs.invalid }">
		<label for="baconNumParagraphs">Number of Paragraphs</label>
		<div class="input-group">
<!--			this inserts an icon-->
			<div class="input-group-addon">
				<i class="fa fa-hashtag" aria-hidden="true"></i>
			</div>
<!--			"step" not only indicates increment, but also truncates an answer to fit the step-->
<!--			for example, this "step" will round up user input to a whole number.-->
<!--			the "()" around (change) are a one way bind (front to back) -->
<!--			the "[()]" is a two way bind-->
<!--			[()] of numParagraphs references the bacon-component and is a two-way bind. -->
<!--			#baconNumParagraphs is an alias we create to reference at other places in the DOM. -->
			<input type="number" id="baconNumParagraphs" name="baconNumParagraphs" class="form-control" required min="0" max="9" step="1" [(ngModel)]="numParagraphs" #baconNumParagraphs="ngModel" (change)="getBacon();" />
		</div>
<!--		Error messages. Use alias from earlier. -->
<!--		"hidden" is a command to display nothing-->
<!--		"pristine" means the user has never clicked the form.-->
<!--		If the user input is valid or no input has been entered AND there's an error, it will be hidden-->
		<div [hidden]="baconNumParagraphs.valid || baconNumParagraphs.pristine" class="alert alert-danger" role="alert">
<!--			the "?" means if there is not an error, nothing will be generated (undefined; null set)-->
<!--			Dylan calls "?" the "null safe".-->
<!--			In Angular, the "if" wipes out the data and displays the error (instead of just hiding it.-->
			<p *ngIf="baconNumParagraphs.errors?.max">Number of paragraphs cannot be more than 10.</p>
			<p *ngIf="baconNumParagraphs.errors?.min">Number of paragraphs is cannot be negative.</p>
			<p *ngIf="baconNumParagraphs.errors?.required">Number of paragraphs required.</p>
		</div>
	</div>
</form>
<!--Following echos the data. "paragraphs" is an array and must be a state variable listed in component! -->
<!--in this case, show variable of the array. -->
<p *ngFor="let paragraph of paragraphs">{{ paragraph }}</p>