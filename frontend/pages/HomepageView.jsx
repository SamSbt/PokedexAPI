import { Container, Image, Row, Col } from "react-bootstrap";
import Cards from "../components/cards/cards";

const HomepageView = (props) => {
	let homepageCard = props.cardInfo;

	const cardDescription = homepageCard.map((cardInfo) => (
		<Col xs={12} sm={6} md={6} lg={4} xl={4} xxl={3} key={cardInfo.id}>
			<Cards
				to={cardInfo.name}
				name={cardInfo.name}
				id={cardInfo.id}
				imageSrc={cardInfo.imgTest}
				description={cardInfo.description}
				height={cardInfo.height}
				weight={cardInfo.weight}
				types={cardInfo.types}
			/>
		</Col>
	));

	return (
		<>
			<Container>
				<div className="mt-5 d-flex flex-column justify-content-center align-items-center w-100">
					<Image
						alt="Image du pokedex"
						src="/src/assets/img/pokedexlogo.png"
						width="100"
						className="mb-2"
					/>
					<h1 className="mt-3 text-center">Attrapez les touuuuus</h1>
				</div>
				<Row className="mt-5">{cardDescription}</Row>
			</Container>
		</>
	);
};

export default HomepageView;
