class General {
	constructor() {
		this.changeDeadURLToMailTo();
	}

	/**
   * General.changeDeadURLToMailTo
   */
	changeDeadURLToMailTo() {
		const links = Array.from(document.querySelectorAll('a'));
		for (let i = 0; i < links.length; i++) {
			if (
				(links[i].attributes[0].value == '')
        | (links[i].attributes[0].value == '#')
			) {
				links[i].href = 'mailto:someone@yoursite.com';
			}
		}
	}
}

export default General;
