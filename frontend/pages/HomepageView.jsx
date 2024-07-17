import { Container, Image, Row, Col } from "react-bootstrap";
import Cards from "../components/cards/cards";

const HomepageView = (props) => {
	let homepageCard = props.cardInfo;

	const cardDescription = homepageCard.map((cardInfo) => (
		<Col
			xs={12}
			sm={6}
			md={4}
			lg={3}
			xl={3}
			xxl={2}
			key={cardInfo.id}
			className="d-flex justify-content-evenly"
		>
			<Cards
				to={cardInfo.name}
				name={cardInfo.name}
				id={cardInfo.id}
				imageSrc={cardInfo.imgTest}
				summary={cardInfo.summary}
				height={cardInfo.height}
				weight={cardInfo.weight}
				types={cardInfo.types}
			/>
		</Col>
	));

	return (
		<>
			<Container fluid className="px-5">
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
