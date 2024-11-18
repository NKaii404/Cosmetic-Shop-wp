( function( window, document ) {
  function hair_spa_salon_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const hair_spa_salon_nav = document.querySelector( '.sidenav' );
      if ( ! hair_spa_salon_nav || ! hair_spa_salon_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...hair_spa_salon_nav.querySelectorAll( 'input, a, button' )],
        hair_spa_salon_lastEl = elements[ elements.length - 1 ],
        hair_spa_salon_firstEl = elements[0],
        hair_spa_salon_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && hair_spa_salon_lastEl === hair_spa_salon_activeEl ) {
        e.preventDefault();
        hair_spa_salon_firstEl.focus();
      }
      if ( shiftKey && tabKey && hair_spa_salon_firstEl === hair_spa_salon_activeEl ) {
        e.preventDefault();
        hair_spa_salon_lastEl.focus();
      }
    } );
  }
  hair_spa_salon_keepFocusInMenu();
} )( window, document );