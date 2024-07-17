import { cardDescriptionData } from "../data/cardDescriptionData";
import HomepageView from "./HomepageView";

const Homepage = () => {
	let cardDescription = cardDescriptionData;
	return (
		<>
			<HomepageView cardInfo={cardDescription} />
		</>
	);
};

export default Homepage;
