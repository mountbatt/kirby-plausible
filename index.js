panel.plugin("mountbatt/plausible", {
	components: {
		"k-plausible-view": {
			props: {
				sharedLink: String,
				scriptJsURL: String
			},
			computed: {
				domain() {
					if (!this.scriptJsURL) return 'https://plausible.io';

					try {
						const url = new URL(this.scriptJsURL);
						return url.origin;
					} catch (e) {
						console.error('Invalid scriptJsURL:', e);
						return 'https://plausible.io';
					}
				},
				embedScriptUrl() {
					if (this.scriptJsURL) {
						return this.scriptJsURL.replace(/\/js\/.*\.js$/, '/js/embed.host.js');
					}
					return `${this.domain}/js/embed.host.js`;
				},
				embedUrl() {
					const theme = this.$panel?.theme?.current ?? 'light';
					return `${this.sharedLink}&embed=true&theme=${theme}&background=transparent`;
				}
			},
			render(h) {
				if (!this.sharedLink) {
					return h('k-panel-inside', [
						h('k-header', 'Analytics'),
						h('k-section', [
							h('k-box', {
								props: {
									icon: 'info',
									theme: 'info'
								}
							}, [
								h('p', 'No sharedLink configured in config.php')
							])
						])
					]);
				}
				return h('k-panel-inside', [
					h('k-header', 'Analytics'),
					h('k-section', [
						h('iframe', {
							attrs: {
								'plausible-embed': '',
								src: this.embedUrl,
								frameborder: '0',
								class: 'plausible-iframe'
							},
							style: {
								width: '100%',
								height: '1600px',
								border: 'none',
								display: 'block'
							}
						})
					])
				]);
			},
			mounted() {
				const scriptUrl = this.embedScriptUrl;
				if (!document.querySelector(`script[src="${scriptUrl}"]`)) {
					const script = document.createElement('script');
					script.src = scriptUrl;
					script.async = true;
					document.head.appendChild(script);
				}
			}
		}
	}
});