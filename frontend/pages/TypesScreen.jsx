import { Container, Row } from "react-bootstrap";
import Header from "../components/header/header";

const TypesScreen = () => {
	return (
		<>
			<Container fluid className="px-5">
				<Header />
				<Row className="mt-5 text-center">
					<h2>Ceci est ma page Types.</h2>
				</Row>
			</Container>
		</>
	);
};

export default TypesScreen;
