@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 metaverse-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Metaverse Development Services</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">We create a successful android app can help to tap into a huge market and take advantage of more customization opportunities and less restrictive Google Play App Store policies to deliver unique value & great usability.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb-->

<!--Start About-->
<section class="service py-5">
	<div class=" container">
		<div class="row">
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img src="images/services/metaverse-development/metaverse-development.webp" alt="Metaverse Development" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Metaverse" class="light-bg-text bg-text">
						<h2>Scale-Up With Our <span class="flup-theme">Metaverse </span>Development Services</h2>
					</div>
					<p>We are a few companies capable of custom-building full-featured Metaverse platforms from scratch. Our Metaverse development services are designed to help you elevate your virtual reality experience. We create custom software solutions that integrate into your existing technology stack and custom-built applications to fit the requirements of your specific business or industry.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section-app metaverse-services py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2 class="text-white">Our<span> Metaverse</span> Development Services</h2>
					</div>
					<p class="text-white">Our Metaverse development services allow you to focus on the creative aspects of your project while we take care of the technical details. We help you explore the possibilities of custom-made virtual worlds by creating a tailor-made solution to suit your requirements and budget.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/mr-app-development/mixed-reality-apps-development.svg" alt="Metaverse Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Metaverse Applications</h3>
					</div>
					<div class="services-text-div">
						<p>Our Metaverse application developers are highly qualified professionals who can deliver outstanding services in a short time. They focus on creating the most innovative, unique, and engaging experiences for your customers.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/mr-app-development/mixed-reality-games-development.svg" alt="Mixed Reality Games Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Metaverse NFT Marketplace</h3>
					</div>
					<div class="services-text-div">
						<p>By leveraging the power of blockchain technology, our Metaverse NFT marketplace development services will introduce new virtual goods—including your own branded NFTs—into a unified platform in which users can explore, discover and interact with each other.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/mr-app-development/custom-mr-development.svg" alt="Custom MR Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Non-fungible Tokens (NFTs)</h3>
					</div>
					<div class="services-text-div">
						<p>Our NFT services are designed to give you the ability to instantly mint and transfer non-fungible digital assets and update their metadata. We believe that the market for non-fungible tokens is prime for growth. We provide our services at a reasonable price and will make your idea a reality.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/mr-app-development/mr-support-and-maintenance.svg" alt="MR Support & Maintenance" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Metaverse E-Commerce Shopping</h3>
					</div>
					<div class="services-text-div">
						<p>Our Metaverse eCommerce shopping development services have enabled consumers to shop the web using their avatar and avatar inventory. Our development services have pushed boundaries and given people freedom of choice to shop online without ever leaving their Metaverse experience.`</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/mr-app-development/mixed-reality-experience-design.svg" alt="Mixed Reality Experience Design" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Decentralized Platforms</h3>
					</div>
					<div class="services-text-div">
						<p>Our Decentralized Platforms development services are aimed at helping you build applications that are fast and easy to update without a single point of failure. We can create any decentralized system from scratch, including but not limited to: games, gambling systems, file-sharing networks, and reward systems.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/mr-app-development/training-solutions.svg" alt="Training Solutions" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Metaverse Social Media Platform</h3>
					</div>
					<div class="services-text-div">
						<p>No matter what you need to do in the Metaverse, we can help. Whether you are trying to raise money for your app/product or seeking help marketing, we are your source for everything social media. We know the tools, how to use them, and how to make them work for you.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Service-->
<section class="service-section-app py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>See How<span> Metaverse Development</span> Solutions Benefits You</h2>
					</div>
					<p>Our Metaverse development solutions are industry-leading, with multiple applications across many industries. From building a virtual world to integrating Augmented Reality into your business, our experts will help you create the ultimate immersive experience for your customers.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="service-heading">
						<h3>Interactive Experience</h3>
					</div>
					<div class="services-text-div">
						<p>We develop an interactive Metaverse experience that combines the latest technology, engaging and immersive storytelling, and face-to-face interactions. Our solution lets you build brand awareness, increase organization loyalty, and improve audiences' understanding of your purpose and goals.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="service-heading">
						<h3>Peer-To-Peer (P2P) Interactions</h3>
					</div>
					<div class="services-text-div">
						<p>Our Metaverse development solutions enable peer-to-per (p2p) interactions for your users, increasing their sense of community and furthering their engagement with your platform. Our team of experts has the expertise to ensure that your metaverse delivers all the features you require from a social VR world.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="service-heading">
						<h3>Wallet Integration</h3>
					</div>
					<div class="services-text-div">
						<p>Wallet integration is a gateway to the Metaverse. The wallet allows users to send and receive digital assets, view their transaction history and other details, and check their token balances. Our wallet integration solutions are perfect for applications users want to access with just one click.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="service-heading">
						<h3>Secured Storage</h3>
					</div>
					<div class="services-text-div">
						<p>We develop enterprise-grade Metaverse development solutions that allow you to store data in a secure, decentralized way. Through our service, we guarantee that your data will be safe and secured and keep you up-to-date with the latest technologies in cloud computing.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="service-heading">
						<h3>Interoperability</h3>
					</div>
					<div class="services-text-div">
						<p>Our Metaverse development solutions are built on open-source technologies' flexible, interoperable, and scalable foundation. We improve the way companies run their businesses by streamlining operations, connecting experts, and empowering entrepreneurs.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="service-heading">
						<h3>Multi-Layer Security</h3>
					</div>
					<div class="services-text-div">
						<p>Our customers do not need to worry about the multi-layer security provided by our system as it is designed to be failproof and user-friendly. We take security very seriously and have several layers of protection built into our products to ensure that your data is safe and secure.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="service-heading">
						<h3>Tokenization</h3>
					</div>
					<div class="services-text-div">
						<p>Tokenization of assets is one of the most significant advantages of blockchain technology, and by creating tokens, we can track real-world assets in a digital form. Our metaverse development solutions allow you to easily create and distribute your tickets to investors, customers, and users.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="service-heading">
						<h3>Decentralization</h3>
					</div>
					<div class="services-text-div">
						<p>Decentralization is a critical element of many applications and solutions that we develop. We believe in using decentralized solutions when possible because it maximizes data security. Our decentralized approach can also be applied to configuring, distributing, and retrieving content information.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Service-->
<section class="service-section-app metaverse-services py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2 class="text-white"><span>Metaverse</span> Games</h2>
					</div>
					<p class="text-white">Our Metaverse games development services aim to offer you a new type of gaming environment you have never experienced before. We create games that build a bridge between physical and virtual reality, which are just as immersive as they are addicting.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="service-heading">
						<h3>2D Virtual Game Development</h3>
					</div>
					<div class="services-text-div">
						<p>We have experts who develop the Metaverse gaming platform with 2D virtual gaming effects & features.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="service-heading">
						<h3>3D Virtual Game Development</h3>
					</div>
					<div class="services-text-div">
						<p>Developing a 3D Virtualized Metaverse gaming environment that attracts players is a core expertise of ours.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="service-heading">
						<h3>Role Play & Play-To-Earn Game</h3>
					</div>
					<div class="services-text-div">
						<p>We develop NFT Metaverse based role-play games, play and earn gaming platforms with advanced plugins.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Service-->
<section class="service-section-app py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Customize<span> AR/VR/MR Game Development</span> Solutions</h2>
					</div>
					<p>At our Metaverse development center, we focus on providing customized AR/VR solutions based on your needs. We combine the latest technologies, including Augmented Reality, Virtual Reality, and Mixed Reality, with custom-tailored solutions for specific industries.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 mv-ar-game wow fadeIn my-auto">
				<div class="common-heading ptag">
					<h3><span>Augmented Reality</span> Devices</h3>
					<p class="pt-2">Our team is behind some of the most innovative and widely adopted projects in the emerging Metaverse and Augmented Reality space. We focus on delivering compelling and immersive user experiences that maximize technology while preserving privacy.</p>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn mt-4 mt-lg-0">
				<img src="images/services/metaverse-development/ar-game-development.webp" alt="AR Development" class="ar-game-development-image img-fluid">
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<img src="images/services/metaverse-development/vr-game-development.webp" alt="VR Development" class="vr-game-development-image img-fluid">
			</div>
			<div class="col-lg-6 mv-vr-game wow fadeIn mt-4 my-lg-auto">
				<div class="common-heading ptag">
					<h3><span>Virtual Reality</span> Development</h3>
					<p class="pt-2">Virtual Reality development can help you bring your vision to life, design a new VR application, or create the next blockbuster VR game. We will take your idea and turn it into a fantastic experience.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 mv-mr-game wow fadeIn my-auto">
				<div class="common-heading ptag">
					<h3><span>Mixed-Reality</span> User Experiences</h3>
					<p class="pt-2">As a leading Metaverse development company, we leverage our expertise in immersive technologies to craft exceptional MR experiences. The product allows users to explore virtual worlds by walking, moving, and interacting within the real world.</p>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn mt-4 mt-lg-0">
				<img src="images/services/metaverse-development/mr-game-development.webp" alt="MR Development" class="mr-game-development-image img-fluid">
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!-- Start Development -->
<section class="metaverse-development py-3 py-md-3 py-lg-5" id="blockchain">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 wow fadeIn">
				<div class="common-heading text-l">
					<h2 class="common-heading text-center text-white">Metaverse App Development</h2>
					<p class="text-center text-white">Rule the future by developing your own Metaverse app. We have Metaverse experts who are skilled in developing next-gen Metaverse software which helps anyone to launch their own Metaverse mobile application. Based on the business requirements the features and plugins may vary. Here are the common Metaverse app development process steps we follow to build a Metaverse app.</p>
				</div>
			</div>
		</div>
		<div class="row wow fadeIn mt-3">
			<div class="col-lg-4 my-auto">
				<div class="card">
					<div class="card-body">
						<h5 class="text-white text-center text-lg-end">Asset Model</h5>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="text-white text-center text-lg-end">Requirement Gathering & Project Analysis</h5>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="text-white text-center text-lg-end">Event Model</h5>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="text-white text-center text-lg-end">Code Back-End Metaverse Application</h5>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="text-white text-center text-lg-end">Account Model</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-3 mt-lg-0">
				<img src="images/services/metaverse-development/app-development.webp" class="img-fluid mx-auto d-block">
			</div>
			<div class="col-lg-4 mt-3 my-lg-auto">
				<div class="card">
					<div class="card-body">
						<h5 class="text-white text-center text-lg-start">Development Of Digital Smart Contract</h5>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="text-white text-center text-lg-start">UX/UI</h5>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="text-white text-center text-lg-start">Integration Of APIs & Blockchain</h5>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="text-white text-center text-lg-start">Collection Model</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Development -->

<!-- Start Project -->
<section class="metaverse-project py-3 py-md-3 py-lg-5" id="project">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 wow fadeIn">
				<div class="common-heading text-l">
					<div data-text="Metaverse" class="light-bg-text bg-text">
						<h2>We Are Your Biggest Support In A <span>Metaverse</span> Project</h2>
					</div>
					<p>We are a professional Virtual Reality development company that creates high-quality, well-functional products. Our team has developed many VR experiences for public use. We support your Metaverse project by creating highly interactive worlds, offering unique features and characters, and providing an outstanding interactive experience.</p>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-6 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/metaverse-development/custom-ar-development.webp" alt="Metaverse Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Blockchain Development</h3>
					</div>
					<div class="services-text-div">
						<p>Our Blockchain Development services are well crafted to help businesses feel the real impact of blockchain technology. Our skilled Blockchain experts work with your team to create more secure financial transactions, improve business processes, and reduce costs for your company.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 pt-3 pt-sm-3 pt-md-0 pt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/metaverse-development/ar-experience-design.webp" alt="Metaverse Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3 class="metaverse-services-heading">Decentralized Network</h3>
					</div>
					<div class="services-text-div">
						<p>We understand how to reach and engage with users in a decentralized network. We can help you design and create a channel content strategy that fits your audience's expectations and usage patterns and match the technical characteristics of a decentralized network.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 wow fadeIn pt-3 pt-sm-3 pt-md-0 pt-xl-0">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/metaverse-development/ar-games-development.webp" alt="Metaverse Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Smart Contract</h3>
					</div>
					<div class="services-text-div">
						<p>We support your Metaverse project by building a secure and functional smart contract, leveraging our extensive experience in Blockchain, finance and business. The smart contract automatically calculates the earnings and securely manages funds while tracking the user's earnings and other financial information.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 wow fadeIn pt-3">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
							<img src="images/services/metaverse-development/ar-app-development.webp" alt="Metaverse Development" class="img-fluid" width="100%" height="100%">
						</div>
					<div class="service-heading">
						<h3>Full-Stack Development</h3>
					</div>
					<div class="services-text-div">
						<p>We provide full-stack development services that include both front-end and back-end development. We also tend to your needs closely with our hand-held approach while implementing the latest technologies and tools in the industry to build the Metaverse project.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 wow fadeIn pt-3">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/metaverse-development/ar-support-and-maintenance.webp" alt="Metaverse Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Interoperable Standards</h3>
					</div>
					<div class="services-text-div">
						<p>Our Metaverse team has been developing interoperable standards to support your Metaverse project. We design a platform gathered into an interoperability framework from the ground up to be fully compatible with whatever new means emerge for avatar and wearable devices.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 wow fadeIn pt-3">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/metaverse-development/ar-integration-service.webp" alt="Metaverse Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Payment Wallet Integration</h3>
					</div>
					<div class="services-text-div">
						<p>Our team of payment wallet integration professionals has a virtual world experience. They create robust payment gateways for many Metaverse projects that connect your web application to the Metaverse project's wallet system.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 wow fadeIn pt-3">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img src="images/services/metaverse-development/ar-support-and-maintenance.webp" alt="Metaverse Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Maintenance & Upgrades</h3>
					</div>
					<div class="services-text-div">
						<p>We understand that your Metaverse project is a huge undertaking, and we are here to help you with the maintenance and upgradating of your Metaverse project. Our support team will be working with you throughout the entire process so that you always have access to our technical knowledge and expertise.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Project -->

<!--Start Features-->
<!-- <section class="features-section-app dark-bg2 py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5 fadeIn">
				<div class="tab-content" id="imagetab">

					@foreach($agencystack as $k=>$items)
					@if($k==0)

					<div class="tab-pane features-content active" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<img src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@else
					<div class="tab-pane features-content fade" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<img src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@endif

					@endforeach

				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeIn">
				<h2>Different Industries We Serve:</h2>
				<p class="py-3">We help a diverse clientele build result-driven mobile apps for different industries.</p>
				<ul class="nav nav-tabs features-tab" id="headingtab" role="tablist">

					@foreach($agencystack as $k=>$items)
					@if($k==0)
					<li class="nav-item">
						<a class="nav-link active" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
					</li>

					@else
					<li class="nav-item">
						<a class="nav-link" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
					</li>
					@endif
					@endforeach

				</ul>
				<div class="tab-content pt-3" id="texttab">

					@foreach($agencystack as $k=>$items)
					@if($k==0)

					<div class="tab-pane image-content active" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p class="py-3">{!!$items['content']!!}</p>
					</div>
					@else

					<div class="tab-pane image-content fade" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p class="py-3">{!!$items['content']!!}</p>
					</div>

					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--End Features-->

<!--Start Let's Work Together-->
<section class="my-1">
	<div class="container">
		<div class="row py-5 justify-content-center hire-developer">
			<div class="col-lg-9">
				<div class="free-cta-title v-center wow fadeIn">
					<div class="row justify-content-center">
						<div class="col-lg-8 my-auto">
							<p class="text-center text-lg-start">Let's Start a <span>New Project</span> Together</span> </p>
						</div>
						<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
							<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Inquire Now
								<i class="fas fa-chevron-right fa-icon"></i>
								<span class="circle"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Let's Work Together-->

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">You receive a state-of-the-art solution with a cutting-edge appeal that engages more people online when you work with professional web developers and digital artists. Under packaged web app development services, take advantage of powerful technologies and a solid architecture to create a web solution that meets your needs.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/services/xr-app-development/experience.svg" alt="Experience" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Experience</h3>
					<p class="description">Gain access to our vast experience in developing sophisticated custom apps tailored to your business needs.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/services/xr-app-development/focus-on-expertise.svg" alt="Focus on Expertise" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Focus on Expertise</h3>
					<p class="description">We nurture a mobile expert culture, ensuring we stay ahead of the curve with specialization and innovation.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/services/xr-app-development/cost-reduction.svg" alt="Cost Reduction" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Cost Reduction</h3>
					<p class="description">We offer cost-effective mobile app development, leveraging our extensive experience and a vast code repository.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/services/xr-app-development/lower-the-risk.svg" alt="Lower The Risk" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Lower The Risk</h3>
					<p class="description">Minimize risk and accelerate time-to-market with our fast, efficient development process tailored for a shifting market</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/services/xr-app-development/reliable-and-flexile.svg" alt="Reliable and Flexile" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Reliable and Flexile</h3>
					<p class="description">We stay adaptable to client needs, using the latest practices and tech skills to avoid issues and deliver results.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/services/xr-app-development/one-partner-for-everyone.svg" alt="One Partner For Everyone" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">One Partner For Everyone</h3>
					<p class="description">Streamline your process with one partner offering end-to-end solutions, avoiding inefficiencies from multiple vendors.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why Choose-->

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our <span>MR App</span> Development Process</h2>
					</div>
					<p>AppsNation offers clients an easy and agile mixed reality app development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">Analyze your target audience, design, and technology needs to effectively create an app that meets your goals.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description"> In-depth analysis of your business and competitors to create a result-driven Android app development strategy.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description"> Our skilled designers create attractive, scalable, and reliable UI/UX designs, ensuring an outstanding user experience.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description"> We build Android apps using cutting-edge technology, adhering to coding standards to solve complex customer challenges.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">Our expert QA team rigorously tests your app to ensure security, functionality, and bug-free performance before deployment.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description"> After thorough testing and customer approval, we deploy your app to the Google Play Store with proven experience.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Tech-->
<!-- <div class="techonology-used- py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<h2>Technology Stack</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<p class="mb30">We create mobile apps with scalable and tested technology stack to deliver apps par excellence.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 wow fadeIn">
				<ul class="nav nav-tabs android-tech-tabs mt-5">
					@foreach($techstack as $k=>$item)

					@if($k==0)
					<li class="active">
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed  stack-hov">
							<img src="uploads/{{$item['image']}}" alt="Tech Stack">
						</a>
					</li>

					@else

					<li>
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed stack-hov">
							<img src="uploads/{{$item['image']}}" alt="Tech Stack">
						</a>
					</li>
					@endif

					@if(($k+1)%3==0 )
					@if($k==0)

					@else
				</ul>
				<ul class="nav nav-tabs android-tech-tabs mt-5">
					@endif
					@endif
					@endforeach
				</ul>
			</div>

			<div class="col-md-7 mt-4 my-lg-auto wow fadeIn">
				<div class="tab-content tab-body">

					@foreach($techstack as $k=>$items)
					@if($k==0)
					<div id="a{{$items['id']}}" class="tab-pane fade in active">
						<div class="boxseo-data text-start">
							<img src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
							<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>
							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>

					@else
					<div id="a{{$items['id']}}" class="tab-pane fade">
						<div class="boxseo-data text-start">
							<img src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
							<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>

							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>

					@endif

					@endforeach
				</div>
			</div>
		</div>
	</div>
</div> -->
<!--End Tech-->

<!--Start Let's Work Together-->
<section class="my-1">
	<div class="container">
		<div class="row py-5 justify-content-center hire-developer">
			<div class="col-lg-8">
				<div class="free-cta-title v-center wow fadeIn">
					<div class="row justify-content-center">
						<div class="col-lg-8 my-auto">
							<p class="text-center text-lg-start">Hire a <span>Dedicated Developer</span> </p>
						</div>
						<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
							<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
								<i class="fas fa-chevron-right fa-icon"></i>
								<span class="circle"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Let's Work Together-->

<!-- Start Technologies -->
<section class="technologies certificates py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading text-center">
					<div data-text="Partners" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">We Partner With The <span>World's Technology</span> Leaders</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto" height="auto">
					<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="auto" height="auto">
					<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting" width="auto" height="auto">
					<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto" height="auto">
					<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Technologies -->

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading w-tdxt text-center">
					<div data-text="Awards" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">Ranked as #1 <span>Android App</span> Development Company</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5 wow fadeIn">
			<div class="col-12">
				<div class="awards-slider owl-carousel owl-theme">

					@foreach($awards as $k => $item)

					@if($k%2==0)

					@if($item['heading']=="Top Website design Agencies")
					<a href="{{$item['comment']}}" target="_blank">
						<div class="award-item">
							<div class="item">
								<div class="card">
									<div class="card-body">
										<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
										<h5 class="text-center pt-3">{{$item['heading']}}</h5>

									</div>
								</div>
							</div>
						</div>
					</a>

					@else
					<div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>

								</div>
							</div>
						</div>
					</div>
					@endif

					@else
					@if($item['heading']=="Top Website design Agencies")
					<a href="{{$item['comment']}}" target="_blank">
						<div class="award-item">
							<div class="item">
								<div class="card">
									<div class="card-body">
										<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
										<h5 class="text-center pt-3">{{$item['heading']}}</h5>

									</div>
								</div>
							</div>
						</div>
					</a>
					@else
					<div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>

								</div>
							</div>
						</div>
					</div>
					@endif
					@endif
					@endforeach

				</div>
			</div>
		</div>
	</div>
</section>
<!--End Badges-->

<!--Start Let's Work Together-->
<section class="my-1">
	<div class="container">
		<div class="row py-5 justify-content-center hire-developer">
			<div class="col-lg-8">
				<div class="free-cta-title v-center wow fadeIn">
					<div class="row justify-content-center">
						<div class="col-lg-7 my-auto">
							<p class="text-center text-lg-start">We Promise. <span>We Deliver.</span> </p>
						</div>
						<div class="col-lg-5 text-center text-lg-start mt-5 mt-lg-0">
							<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
								<i class="fas fa-chevron-right fa-icon"></i>
								<span class="circle"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Let's Work Together-->

<!--Start Testinomial-->
<section class="testimonials-section-app pt100 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading text-center">
					<div data-text="Testimonials" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">What <span> Our Clients</span> Say About <span>AppsNation</span></h2>
					</div>
					<h5 class="text-white">Over 1200+ Satisfied Clients and Growing</h5>
				</div>
			</div>
		</div>

		<div class="testimonial-card-a owl-carousel owl-theme">
			@foreach($testimonials as $key => $item)
			<div class="tcd card h-100">
				<div class="row">
					<div class="col-lg-6 position-relative">
						<div class="video-overlay" data-target="player-{{$key}}" style="position:absolute;top:0;left:0;width:100%;height:100%;cursor:pointer;z-index:2;"></div>
						<iframe id="player-{{$key}}" class="youtube-player testimonial-video" src="{{$item['comments']}}" title="Client Testimonial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
					<div class="col-lg-6">
						<div class="testimonial-card card-body">
							<div class="tt-text">
								<p>{{$item['title']}}</p>
							</div>
							<div class="client-thumbs mt30">
								<div class="media v-center upset">
									<div class="media-body user-info v-center">
										<h3>{{$item['name']}}</h3>
										<p>{{$item['location']}}</p>
										<i class="fas fa-quote-right posiqut"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			@endforeach
		</div>
		<div class="row mt-5">
			<div class="col-12">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://clutch.co/profile/appsnation#highlights" target="_blank">
									<img src="images/reviews/clutch.webp" class="img-fluid d-block mx-auto" alt="Clutch" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Clutch</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.bark.com/en/us/company/appsnation/wGVQn/" target="_blank">
									<img src="images/reviews/bark.webp" class="img-fluid d-block mx-auto" alt="Bark" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Bark</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.designrush.com/agency/profile/appsnation" target="_blank">
									<img src="images/reviews/designrush.webp" class="img-fluid d-block mx-auto" alt="DesignRush" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by DesignRush</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.goodfirms.co/company/appsnation-co" target="_blank">
									<img src="images/reviews/goodfirms.webp" class="img-fluid d-block mx-auto" alt="GoodFirms" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by GoodFirms</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.trustpilot.com/review/appsnation.co" target="_blank">
									<img src="images/reviews/trustpilot.webp" class="img-fluid d-block mx-auto" alt="Trustpilot" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Trustpilot</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.sortlist.com/agency/appsnation" target="_blank">
									<img src="images/reviews/sortlist.webp" class="img-fluid d-block mx-auto" alt="Sortlist" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Sortlist</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://upcity.com/profiles/appsnation" target="_blank">
									<img src="images/reviews/upcity.webp" class="img-fluid d-block mx-auto" alt="UpCity" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by UpCity</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.sitejabber.com/reviews/appsnation.co" target="_blank">
									<img src="images/reviews/sitejabber.webp" class="img-fluid d-block mx-auto" alt="SiteJabber" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by SiteJabber</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 fadeIn my-auto text-center">
				<div class="review-title-ref mt40">
					<a href="{{url('/testimonials')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3">Read More Reviews <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Testinomial-->

<!-- Start FAQS-->
<section class="faq-section py-5" id="faqs">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow fadeIn">
				<div class="common-heading">
					<div data-text="FAQ" class="light-bg-text bg-text">
						<h2>Frequently Asked Questions</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt100">
			<div class="col-sm-12 wow fadeIn">
				<div class="accordion" id="accordionExample-a">
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-b">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								How much do Metaverse Development Services cost?
							</button>
						</h2>
						<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Metaverse is a decentralized platform and value transfer protocol that aims to build a bridge between the real and virtual worlds. We can say that the average cost for a custom application is $10,000.</p>
									<p class="pt-2">However, the cost of developing an application on Metaverse depends on various factors such as:</p>
									<ul class="list">
										<li>The complexity of your project.</li>
										<li>The size of the project.</li>
										<li>The number of features required.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How do you develop a metaverse?
							</button>
						</h2>
						<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>We approach a comprehensive, agile framework for building, testing, and deploying virtual worlds. The roadmap is updated periodically to reflect any changes we make during the development or testing process.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								What does metaverse company do?
							</button>
						</h2>
						<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>A metaverse company is a company that provides services to customers through the use of virtual reality (VR) technology.</p>
									<p class="pt-2">Metaverse companies provide products and services to customers via mixed reality technologies such as augmented reality (AR) and virtual reality (VR). Their services also include software development, IT consulting, and systems integration. </p>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								How long does it take to make an MR project?
							</button>
						</h2>
						<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>It depends on the scope of your project, but generally, it can take anywhere from 2-6 months.</p>
									<p class="pt-2">It is essential to keep in mind that this is just an estimate, and your timeline will depend on many factors: goal, type, size, complexity, of the project, and many other elements.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								What kind of testing will you do?
							</button>
						</h2>
						<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>We use many different types of testing for each project that helps us get closer to ensuring the product is ready for market. Our testing methods are as below:</p>
									<ul class="ps-5">
										<li>Usability Testing</li>
										<li>Regression Testing</li>
										<li>Performance Testing</li>
										<li>Compatibility Testing</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								Will we sign an NDA to keep my MR software/application idea confidential?
							</button>
						</h2>
						<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>A non-disclosure agreement (NDA) is a contract where two parties agree not to disclose certain information. Yes, we will sign an NDA with you. Without such an agreement, there could be enforceable technical issues. We cannot have those kinds of problems in this project because the exact idea and steps to accomplish your goals can be crucial for authentication.</p>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End FAQS -->

@endsection