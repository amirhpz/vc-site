(function () {
    'use strict';

    var dialog = document.getElementById('project-modal');

     if (!dialog || typeof dialog.showModal !== 'function') {
        return;
    }

    var content = dialog.querySelector('[data-modal-content]');
    var lastTrigger = null;
    var currentId = null;

    function hashFor(id) {
        return '#company-' + id;
    }

    function idFromHash() {
        var match = /^#company-(\d+)$/.exec(window.location.hash);

        return match ? match[1] : null;
    }

    function cardFor(id) {
        return document.querySelector('[data-project-id="' + id + '"]');
    }

    function open(id, trigger, keepHistory) {
        if (dialog.open && currentId === id) {
            return;
        }

        var card = cardFor(id);
        var template = card ? card.querySelector('.project-modal-tpl') : null;

        // A deep link can point at a company that is not on the current page.
        if (!template) {
            return;
        }

        content.replaceChildren(template.content.cloneNode(true));

        lastTrigger = trigger || (card ? card.querySelector('[data-modal-trigger]') : null);
        currentId = id;

        if (!dialog.open) {
            dialog.showModal();
            document.documentElement.classList.add('modal-open');
        }

        if (!keepHistory && window.location.hash !== hashFor(id)) {
            window.history.pushState({ projectModal: id }, '', hashFor(id));
        }
    }

    function close() {
        if (dialog.open) {
            dialog.close();
        }
    }

    // Escape, backdrop click and the close button all finish here.
    dialog.addEventListener('close', function () {
        document.documentElement.classList.remove('modal-open');
        content.replaceChildren();

        // Drop #company-N without leaving an extra history entry behind.
        if (currentId && window.location.hash === hashFor(currentId)) {
            window.history.replaceState(null, '', window.location.pathname + window.location.search);
        }

        if (lastTrigger && document.contains(lastTrigger)) {
            lastTrigger.focus({ preventScroll: true });
        }

        currentId = null;
        lastTrigger = null;
    });

    // The dialog element itself receives clicks that land on the backdrop.
    dialog.addEventListener('click', function (event) {
        if (event.target === dialog) {
            close();
        }
    });

    document.addEventListener('click', function (event) {
        var trigger = event.target.closest('[data-modal-trigger]');

        if (trigger) {
            var card = trigger.closest('[data-project-id]');

            if (card) {
                open(card.getAttribute('data-project-id'), trigger, false);
            }

            return;
        }

        if (event.target.closest('[data-modal-close]')) {
            close();
        }
    });

    // Back/forward and hand-typed hashes keep the modal in sync with the URL.
    function syncFromUrl() {
        var id = idFromHash();

        if (id) {
            if (!dialog.open || currentId !== id) {
                open(id, null, true);
            }
        } else if (dialog.open) {
            close();
        }
    }

    window.addEventListener('popstate', syncFromUrl);
    window.addEventListener('hashchange', syncFromUrl);

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', syncFromUrl);
    } else {
        syncFromUrl();
    }
})();
