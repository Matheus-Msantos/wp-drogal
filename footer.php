<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<footer class="wc-footer">
	<div class="wc-footer-top">
		<div class="wc-footer-col1">
			<img src="<?= get_stylesheet_directory_uri()?>/assets/img/logo_drogal_footer.png" alt="logo drogal" />

			<span>Siga nossas redes sociais</span>
			<div class="wc-footer-redes">
				<a href="#" target="_BLANK">
					<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_699_384)">
							<path
								d="M10.2275 0.898438C4.70474 0.898438 0.227539 5.37564 0.227539 10.8984C0.227539 15.588 3.45634 19.5232 7.81194 20.604V13.9544H5.74994V10.8984H7.81194V9.58164C7.81194 6.17804 9.35234 4.60044 12.6939 4.60044C13.3275 4.60044 14.4207 4.72484 14.8679 4.84884V7.61884C14.6319 7.59404 14.2219 7.58164 13.7127 7.58164C12.0731 7.58164 11.4395 8.20284 11.4395 9.81764V10.8984H14.7059L14.1447 13.9544H11.4395V20.8252C16.3911 20.2272 20.2279 16.0112 20.2279 10.8984C20.2275 5.37564 15.7503 0.898438 10.2275 0.898438Z"
								fill="#5A707F" />
						</g>
						<defs>
							<clipPath id="clip0_699_384">
								<rect width="20" height="20" fill="white" transform="translate(0.227539 0.898438)" />
							</clipPath>
						</defs>
					</svg>

				</a>

				<a href="#" target="_BLANK">
					<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_699_380)">
							<path
								d="M10.9492 2.69922C13.6211 2.69922 13.9375 2.71094 14.9883 2.75781C15.9648 2.80078 16.4922 2.96484 16.8438 3.10156C17.3086 3.28125 17.6445 3.5 17.9922 3.84766C18.3438 4.19922 18.5586 4.53125 18.7383 4.99609C18.875 5.34766 19.0391 5.87891 19.082 6.85156C19.1289 7.90625 19.1406 8.22266 19.1406 10.8906C19.1406 13.5625 19.1289 13.8789 19.082 14.9297C19.0391 15.9063 18.875 16.4336 18.7383 16.7852C18.5586 17.25 18.3398 17.5859 17.9922 17.9336C17.6406 18.2852 17.3086 18.5 16.8438 18.6797C16.4922 18.8164 15.9609 18.9805 14.9883 19.0234C13.9336 19.0703 13.6172 19.082 10.9492 19.082C8.27734 19.082 7.96094 19.0703 6.91016 19.0234C5.93359 18.9805 5.40625 18.8164 5.05469 18.6797C4.58984 18.5 4.25391 18.2813 3.90625 17.9336C3.55469 17.582 3.33984 17.25 3.16016 16.7852C3.02344 16.4336 2.85938 15.9023 2.81641 14.9297C2.76953 13.875 2.75781 13.5586 2.75781 10.8906C2.75781 8.21875 2.76953 7.90234 2.81641 6.85156C2.85938 5.875 3.02344 5.34766 3.16016 4.99609C3.33984 4.53125 3.55859 4.19531 3.90625 3.84766C4.25781 3.49609 4.58984 3.28125 5.05469 3.10156C5.40625 2.96484 5.9375 2.80078 6.91016 2.75781C7.96094 2.71094 8.27734 2.69922 10.9492 2.69922ZM10.9492 0.898438C8.23438 0.898438 7.89453 0.910156 6.82813 0.957031C5.76563 1.00391 5.03516 1.17578 4.40234 1.42188C3.74219 1.67969 3.18359 2.01953 2.62891 2.57813C2.07031 3.13281 1.73047 3.69141 1.47266 4.34766C1.22656 4.98438 1.05469 5.71094 1.00781 6.77344C0.960938 7.84375 0.949219 8.18359 0.949219 10.8984C0.949219 13.6133 0.960938 13.9531 1.00781 15.0195C1.05469 16.082 1.22656 16.8125 1.47266 17.4453C1.73047 18.1055 2.07031 18.6641 2.62891 19.2188C3.18359 19.7734 3.74219 20.1172 4.39844 20.3711C5.03516 20.6172 5.76172 20.7891 6.82422 20.8359C7.89063 20.8828 8.23047 20.8945 10.9453 20.8945C13.6602 20.8945 14 20.8828 15.0664 20.8359C16.1289 20.7891 16.8594 20.6172 17.4922 20.3711C18.1484 20.1172 18.707 19.7734 19.2617 19.2188C19.8164 18.6641 20.1602 18.1055 20.4141 17.4492C20.6602 16.8125 20.832 16.0859 20.8789 15.0234C20.9258 13.957 20.9375 13.6172 20.9375 10.9023C20.9375 8.1875 20.9258 7.84766 20.8789 6.78125C20.832 5.71875 20.6602 4.98828 20.4141 4.35547C20.168 3.69141 19.8281 3.13281 19.2695 2.57813C18.7148 2.02344 18.1563 1.67969 17.5 1.42578C16.8633 1.17969 16.1367 1.00781 15.0742 0.960938C14.0039 0.910156 13.6641 0.898438 10.9492 0.898438Z"
								fill="#5A707F" />
							<path
								d="M10.9492 5.76172C8.11328 5.76172 5.8125 8.0625 5.8125 10.8984C5.8125 13.7344 8.11328 16.0352 10.9492 16.0352C13.7852 16.0352 16.0859 13.7344 16.0859 10.8984C16.0859 8.0625 13.7852 5.76172 10.9492 5.76172ZM10.9492 14.2305C9.10938 14.2305 7.61719 12.7383 7.61719 10.8984C7.61719 9.05859 9.10938 7.56641 10.9492 7.56641C12.7891 7.56641 14.2812 9.05859 14.2812 10.8984C14.2812 12.7383 12.7891 14.2305 10.9492 14.2305Z"
								fill="#5A707F" />
							<path
								d="M17.4883 5.5586C17.4883 6.22266 16.9492 6.75782 16.2891 6.75782C15.625 6.75782 15.0898 6.21875 15.0898 5.5586C15.0898 4.89453 15.6289 4.35938 16.2891 4.35938C16.9492 4.35938 17.4883 4.89844 17.4883 5.5586Z"
								fill="#5A707F" />
						</g>
						<defs>
							<clipPath id="clip0_699_380">
								<rect width="20" height="20" fill="white" transform="translate(0.949219 0.898438)" />
							</clipPath>
						</defs>
					</svg>

				</a>

				<a href="#" target="_BLANK">
					<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_699_386)">
							<path
								d="M10.6709 0.898438C5.14746 0.898438 0.670898 5.375 0.670898 10.8984C0.670898 15.1367 3.30762 18.7539 7.02637 20.2109C6.94043 19.418 6.8584 18.207 7.06152 17.3438C7.24512 16.5625 8.2334 12.375 8.2334 12.375C8.2334 12.375 7.93262 11.7773 7.93262 10.8906C7.93262 9.5 8.7373 8.46094 9.74121 8.46094C10.5928 8.46094 11.0068 9.10156 11.0068 9.87109C11.0068 10.7305 10.46 12.0117 10.1787 13.1992C9.94433 14.1953 10.6787 15.0078 11.6592 15.0078C13.4365 15.0078 14.8037 13.1328 14.8037 10.4297C14.8037 8.03516 13.085 6.35938 10.6279 6.35938C7.78418 6.35938 6.1123 8.49219 6.1123 10.6992C6.1123 11.5586 6.44434 12.4805 6.8584 12.9805C6.94043 13.0781 6.95215 13.168 6.92871 13.2656C6.85449 13.582 6.68262 14.2617 6.65137 14.3984C6.6084 14.582 6.50684 14.6211 6.31543 14.5312C5.06543 13.9492 4.28418 12.125 4.28418 10.6562C4.28418 7.5 6.57715 4.60547 10.8896 4.60547C14.3584 4.60547 17.0537 7.07813 17.0537 10.3828C17.0537 13.8281 14.8818 16.6016 11.8662 16.6016C10.8545 16.6016 9.90137 16.0742 9.57324 15.4531C9.57324 15.4531 9.07324 17.3633 8.95215 17.832C8.72559 18.6992 8.11621 19.7891 7.70996 20.4531C8.64746 20.7422 9.63965 20.8984 10.6709 20.8984C16.1943 20.8984 20.6709 16.4219 20.6709 10.8984C20.6709 5.375 16.1943 0.898438 10.6709 0.898438Z"
								fill="#5A707F" />
						</g>
						<defs>
							<clipPath id="clip0_699_386">
								<rect width="20" height="20" fill="white" transform="translate(0.670898 0.898438)" />
							</clipPath>
						</defs>
					</svg>
				</a>

				<a href="#" target="_BLANK">
					<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M15.6644 2.48438H18.4756L12.3339 9.50395L19.5592 19.056H13.9019L9.47086 13.2627L4.40079 19.056H1.58786L8.15703 11.5478L1.22583 2.48438H7.02675L11.032 7.77965L15.6644 2.48438ZM14.6778 17.3734H16.2355L6.18033 4.07865H4.50871L14.6778 17.3734Z"
							fill="#5A707F" />
					</svg>
				</a>

				<a href="#" target="_BLANK">
					<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_699_388)">
							<path
								d="M14.341 0.898438H10.9704V14.5216C10.9704 16.1448 9.67401 17.4782 8.06074 17.4782C6.44746 17.4782 5.15109 16.1448 5.15109 14.5216C5.15109 12.9274 6.41866 11.623 7.97433 11.5651V8.14483C4.54612 8.20277 1.78052 11.0144 1.78052 14.5216C1.78052 18.0579 4.60373 20.8984 8.08956 20.8984C11.5753 20.8984 14.3985 18.0289 14.3985 14.5216V7.5361C15.6661 8.46366 17.2218 9.01438 18.8639 9.04338V5.62308C16.3287 5.53612 14.341 3.44916 14.341 0.898438Z"
								fill="#5A707F" />
						</g>
						<defs>
							<clipPath id="clip0_699_388">
								<rect width="20" height="20" fill="white" transform="translate(0.11377 0.898438)" />
							</clipPath>
						</defs>
					</svg>
				</a>
			</div>
		</div>

		<div class="wc-footer-col2 wc-footer-col-links">
			<span>Institucional</span>
			<nav class="wc-footer-col-nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-4',
						'menu_id' => 'primary-menu',
					)
				);
				?>
			</nav>
		</div>

		<div class="wc-footer-col3 wc-footer-col-links">
			<span>Serviços e benefícios</span>
			<nav class="wc-footer-col-nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-5',
						'menu_id' => 'primary-menu',
					)
				);
				?>
			</nav>
		</div>

		<div class="wc-footer-col4 wc-footer-col-links">
			<span>Central de Atendimento</span>
			<nav class="wc-footer-col-nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-6',
						'menu_id' => 'primary-menu',
					)
				);
				?>
			</nav>
		</div>
	</div>
	<div class="wc-footer-bottom">
		<ul>
			<li>
				<a href="#">
					Política de privacidade
				</a>
			</li>
			<li>
				<a href="#">
					Termos de uso
				</a>
			</li>
			<li>
				<a href="#">
					Responsabilidade social
				</a>
			</li>
		</ul>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

<script>
  let currentPage = 1;
  const button = document.getElementById("load-more");
  const postList = document.getElementById("wc-post-list");
  const categoryID = <?php echo get_queried_object_id(); ?>;

  button.addEventListener("click", function () {
    currentPage++;
    button.disabled = true;
    button.textContent = "Carregando...";

    fetch("<?php echo admin_url('admin-ajax.php'); ?>?action=load_more_posts&page=" + currentPage + "&cat=" + categoryID)
      .then(res => res.text())
      .then(data => {
        if (data.trim() !== "") {
          postList.insertAdjacentHTML("beforeend", data);
          button.disabled = false;
          button.textContent = "Mostrar mais";
        } else {
          button.remove();
        }
      })
      .catch(err => {
        console.error("Erro ao carregar posts:", err);
        button.disabled = false;
        button.textContent = "Mostrar mais";
      });
  });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  document.addEventListener('click', function(e) {
    if (e.target.closest('.wc-like-btn')) {
      e.preventDefault();

      const button = e.target.closest('.wc-like-btn');
      const container = button.closest('.wc-comment-like');
      const commentId = container.dataset.commentId;

      fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'action=wc_like_comment&comment_id=' + commentId
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          container.querySelector('.wc-like-count').textContent = data.data.likes;
          button.classList.add('liked'); // estiliza botão após curtir
        } else {
          alert(data.data.message);
        }
      });
    }
  });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  document.addEventListener('click', function(e) {
    if (e.target.closest('.wc-deslike-btn')) {
      e.preventDefault();

      const button = e.target.closest('.wc-deslike-btn');
      const container = button.closest('.wc-comment-deslike');
      const commentId = container.dataset.commentId;

      fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'action=wc_deslike_comment&comment_id=' + commentId
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          container.querySelector('.wc-deslike-count').textContent = data.data.deslikes;
          button.classList.add('desliked'); // estiliza botão após curtir
        } else {
          alert(data.data.message);
        }
      });
    }
  });
});
</script>



</html>

